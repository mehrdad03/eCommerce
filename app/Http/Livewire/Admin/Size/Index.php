<?php

namespace App\Http\Livewire\Admin\Size;

use App\Models\Localization;
use App\Models\Size;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{

    public function saveSize($formData, Size $sizes)
    {
        $validator = Validator::make($formData, [
            'size' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            'category_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
        ]);

        $validator->validate();
        $sizes->saveSize($formData);

    }

    public function render()
    {
        $sizes = Size::all();
        $localizations = Localization::all();
        return view('admin.livewire.size.index', ['sizes' => $sizes, 'localizations' => $localizations])->extends('admin.layouts.app');

    }
}
