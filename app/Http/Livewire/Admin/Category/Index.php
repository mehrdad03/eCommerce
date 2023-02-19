<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\Localization;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{

    public $local = '', $name = '', $slug = '', $icon = '', $category_id = '', $cat_id;

    public function saveCategory($formData, Category $categories)
    {
        if ($this->cat_id != null) {
            $cat_id = $this->cat_id;
            $validator = Validator::make($formData, [
                'local' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'category_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'icon' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $cat_id = 0;
            $validator = Validator::make($formData, [
                'local' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'category_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'icon' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }

        $validator->validate();
        $this->resetValidation ();
        $categories->saveCategory($formData, $cat_id);

        $this->local = '';
        $this->name = '';
        $this->slug = '';
        $this->icon = '';
        $this->category_id = '';
        $this->cat_id = '';
    }

    public function editCategory($cat_id)
    {
        $category = Category::query()->where('id', $cat_id)->first();
        $this->local = $category->local;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->icon = $category->icon;
        $this->category_id = $category->category_id;
        $this->cat_id = $category->id;
    }

    public function deleteCategory($cat_id)
    {
        Category::query()->where('id',$cat_id)->delete();
        Localization::query()->where('property_id',$cat_id)->delete();
    }

    public function render()
    {
        $categories = Category::all();
        $localizations = Localization::all();
        return view('admin.livewire.category.index', ['categories' => $categories, 'localizations' => $localizations])->extends('admin.layouts.app');
    }
}
