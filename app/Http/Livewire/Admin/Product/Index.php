<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use Livewire\Component;

class Index extends Component
{
    use WithFileUploads;

    public $names = [], $describes = [], $brand_id, $code, $price, $quantity, $discount, $status, $size_id, $color_id, $category_id, $image, $currency_id, $product_id;
    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        $brands = Brand::all();
        $sizes = Size::all();
        $colors = Color::all();
        $categories = \App\Models\Category::all();
        $currencies = Currency::all();
        return view('admin.livewire.product.index', ['brands' => $brands, 'sizes' => $sizes, 'colors' => $colors, 'categories' => $categories, 'currencies' => $currencies])->extends('admin.layouts.app');
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
//        $this->saveProduct();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function saveProduct($formData, Product $products)
    {
        $languages = [];
        foreach (config('app.languages') as $locale) {
            $languages[] = $locale;
        }
        $rules = [];
        if ($this->product_id != null) {
            $product_id = $this->product_id;
            foreach ($languages as $lang) {
                $rules[$lang] = "required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u";
            }
        } else {
            $product_id = 0;
            foreach ($languages as $lang) {
                $rules[$lang] = "required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u";
            }
        }
        $rules['brand_id'] = ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';
        $rules['code'] = ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';
        $rules['price'] = ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';
        $rules['quantity'] = ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';
        $rules['discount'] = ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';
        $rules['status'] = ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';
        $rules['size_id'] = ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';
        $rules['color_id'] = ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';
        $rules['category_id'] = ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';
        $rules['currency_id'] = ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';
        $rules['image'] = 'image';
        $image = $this->image;

        $validator = Validator::make($formData, $rules);
        $validator->validate();
        $this->resetValidation();
        $products->saveProduct($formData, $product_id, $image);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        $this->names = [];
        $this->describes = [];
        $this->brand_id = '';
        $this->code = '';
        $this->price = '';
        $this->quantity = '';
        $this->discount = '';
        $this->status = '';
        $this->size_id = '';
        $this->color_id = '';
        $this->category_id = '';
        $this->currency_id = 1;
        $this->image = '';
        $this->product_id = '';
    }


//    public function validateData()
//    {
//        if ($this->currentStep == 1) {
//            $this->validate([
//                'brand_id' => 'required',
//                'code' => 'required',
//                'price' => 'required',
//                'quantity' => 'required',
//                'discount' => 'required',
//                'status' => 'required',
//            ]);
//        } elseif ($this->currentStep == 2) {
//            $this->validate([
//                'size_id' => 'required',
//                'color_id' => 'required',
//                'category_id' => 'required',
//                'currency_id' => 'required',
//            ]);
//        }
//    }
//
//    public function saveProduct()
//    {
//        $this->resetErrorBag();
//        if ($this->currentStep == 3) {
//            $this->validate([
//                'image' => 'required| image'
//            ]);
//        }
//        dd('yesss');
//    }


}
