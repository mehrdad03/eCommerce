<?php

namespace App\Http\Livewire\Admin\Size;

use App\Models\Localization;
use App\Models\Size;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public $size = '', $category_id = '', $size_id;

    public function saveSize($formData, Size $sizes)
    {
        if ($this->size_id != null) {
            $size_id = $this->size_id;
            $validator = Validator::make($formData, [
                'size' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'category_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $size_id = 0;
            $validator = Validator::make($formData, [
                'size' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'category_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }


        $validator->validate();
        $this->resetValidation();
        $sizes->saveSize($formData, $size_id);

        $this->size = '';
        $this->category_id = '';
        $this->size_id = '';

    }

    public function editSize($size_id)
    {
        $size = Size::query()->where('id', $size_id)->first();
        $this->size = $size->size;
        $this->category_id = $size->category_id;
        $this->size_id = $size->id;
    }

    public function deleteSize($size_id)
    {
        Size::query()->where('id', $size_id)->delete();
    }

    public function render()
    {
        $sizes = Size::all();
        $localizations = Localization::all();
        return view('admin.livewire.size.index', ['sizes' => $sizes, 'localizations' => $localizations])->extends('admin.layouts.app');

    }
}
