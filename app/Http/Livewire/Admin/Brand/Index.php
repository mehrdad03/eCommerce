<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use App\Models\File;
use App\Models\Localization;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;


    public $names = [], $category_id = '', $image, $brand_id;
    protected $listeners = ['delete', 'saveBrand'];

    public function saveBrand($formData, Brand $brands)
    {

        foreach (config('app.languages') as $locale) {

            $languages[] = $locale;
        }
        $rules = [];

        if ($this->brand_id != null) {
            $brand_id = $this->brand_id;
            foreach ($languages as $lang) {
                $rules[$lang] = "required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u";
            }
        } else {
            $brand_id = 0;
            foreach ($languages as $lang) {

                $rules[$lang] = "required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u";
            }
        }
        $rules['category_id'] = 'required |regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';
        $rules['image'] = 'image|mimes:jpg,jpeg,png,gif|max:1024';
        $image = $this->image;


        $validator = Validator::make($formData, $rules);
        $validator->validate();
        $this->resetValidation();

        $brands->saveBrand($formData, $brand_id, $image);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        $this->names = [];
        $this->category_id = '';
        $this->image = '';
        $this->brand_id = '';
    }

    public function editBrand($brand_id)
    {
        $brand = Brand::query()->where('id', $brand_id)->first();
        $brandLocales = Localization::query()->where([
            'property_id' => $brand_id,
            'type' => 'brand',
        ])->get();

        foreach ($brandLocales as $locale) {
            $this->names[$locale->local] = $locale->name;
        }

        $this->category_id = $brand->category_id;
        $this->image = $brand->image;
        $this->brand_id = $brand->id;

    }

    public function deleteConfirm($id)
    {

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => trans('alerts.warning'),
            'text' => '',
            'id' => $id
        ]);
    }

    public function delete($brand_id)
    {
        $query = File::query()->where([
            'product_id' => $brand_id,
            'type' => 'brand',
        ]);
        $brandFileName = $query->pluck('name')->first();

        DB::transaction(function () use ($brandFileName, $query, $brand_id) {
            //delete file
            unlink('images/brands/' . $brandFileName);

            //delete data from tables
            $query->delete();
            Brand::query()->where('id', $brand_id)->delete();
            Localization::query()->where([
                'property_id' => $brand_id,
                'type' => 'brand',
            ])->delete();

        });
        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);
    }

    public function render()
    {
        $brands = Brand::with('locales', 'file')->latest()->get();
        $localizations = Localization::query()->where('type','=','category')->get();
        return view('admin.livewire.brand.index', ['brands' => $brands, 'localizations' => $localizations])->extends('admin.layouts.app');
    }
}
