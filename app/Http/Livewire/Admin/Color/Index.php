<?php

namespace App\Http\Livewire\Admin\Color;

use App\Models\Color;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{

    public $name;
    public $code;
    public $color_id;

    public function saveColor($formData, Color $colors)
    {

        $validator = Validator::make($formData, [
            'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            'code' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
        ]);

        $color_id = 0;

        if ($this->color_id != null) {
            $color_id = $this->color_id;
        }

        $validator->validate();
        $colors->saveColor($formData, $color_id);
    }

    public function editColor($color_id)
    {
        $color = Color::query()->where('id', $color_id)->first();
        $this->name = $color->name;
        $this->code = $color->code;
        $this->color_id = $color->id;
    }


    public function render()
    {
        $colors = Color::all();
        return view('admin.livewire.color.index', ['colors' => $colors])->extends('admin.layouts.app');
    }
}
