<?php

namespace App\Http\Livewire\Admin\Color;

use App\Models\Color;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{

    public function saveColor($formData, Color $colors)
    {

        $validator = Validator::make($formData, [
            'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            'code' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
        ]);

        $validator->validate();
        $colors = $colors->saveColor($formData);
        $this->colors = Color::all();
    }


    public function mount()
    {
        $this->colors = Color::all();
    }


    public function render()
    {
        $colors = Color::all();
        return view('admin.livewire.color.index', ['colors' => $colors])->extends('admin.layouts.app');
    }
}
