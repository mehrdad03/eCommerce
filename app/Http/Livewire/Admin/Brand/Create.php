<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use App\Models\Localization;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;


class Create extends Component
{


    public $local = '', $name = '', $slug = '', $category_id = '', $brand_id;

    public function saveBrand($formData, Brand $brands)
    {
        if ($this->brand_id != null) {
            $brand_id = $this->brand_id;
            $validator = Validator::make($formData, [
                'local' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'slug' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'category_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $brand_id = 0;
            $validator = Validator::make($formData, [
                'local' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'slug' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'category_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }
        $validator->validate();
        $this->resetValidation();
        $brands->saveBrand($formData, $brand_id);

        $this->local = '';
        $this->name = '';
        $this->slug = '';
        $this->category_id = '';
        $this->brand_id = '';
    }

    public function editBrand($brand_id)
    {
        $brand = Brand::query()->where('id', $brand_id)->first();
        $this->local = $brand->local;
        $this->name = $brand->name;
        $this->slug = $brand->slug;
        $this->category_id = $brand->category_id;
        $this->brand_id = $brand->id;
    }

    public function deleteBrand($brand_id)
    {
        Brand::query()->where('id', $brand_id)->delete();
        Localization::query()->where('property_id', $brand_id)->delete();
    }

    public function render()
    {
        $brands = Brand::all();
        $localizations = Localization::all();
        return view('admin.livewire.brand.create', ['brands' => $brands, 'localizations' => $localizations])->extends('admin.layouts.app');
    }
}
