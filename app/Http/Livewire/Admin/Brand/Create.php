<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use App\Models\Localization;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;


    public $names = [], $category_id = '', $image, $brand_id;

    public function saveBrand($formData, Brand $brands)
    {
        dd($this->image);

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
        $rules['category_id'] = ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';
        $rules['image'] = 'image';


        $validator = Validator::make($formData, $rules);

        $validator->validate();
        $this->resetValidation();

        $brands->saveBrand($formData, $brand_id);


        $this->names = [];
        $this->category_id = '';
        $this->image = '';
        $this->brand_id = '';


    }

//    public function editBrand($brand_id)
//    {
//        $brand = Brand::query()->where('id', $brand_id)->first();
//        $this->local = $brand->local;
//        $this->name = $brand->name;
//        $this->slug = $brand->slug;
//        $this->category_id = $brand->category_id;
//        $this->brand_id = $brand->id;
//    }

//    public function deleteBrand($brand_id)
//    {
//        Brand::query()->where('id', $brand_id)->delete();
//        Localization::query()->where('property_id', $brand_id)->delete();
//    }

    public function render()
    {
        $brands = Brand::with('locales')->get();
        $localizations = Localization::all();
        return view('admin.livewire.brand.create', ['brands' => $brands, 'localizations' => $localizations])->extends('admin.layouts.app');
    }
}
