<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public function saveCategory($formData, Category $categories)
    {
        $validator = Validator::make($formData, [
            'local' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            'slug' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            'category_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            'icon' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
        ]);
        $validator->validate();
        $categories->saveCategory($formData);
    }

    public function render()
    {
        $categories = Category::all();
        return view('admin.livewire.category.index', ['categories' => $categories])->extends('admin.layouts.app');
    }
}
