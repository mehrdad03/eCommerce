<?php

namespace App\Http\Livewire\Admin\Color;

use App\Models\Color;
use Livewire\Component;

class Index extends Component
{

    public $name = "";
    public $code = "";

    public $colors;

    public function save()
    {
        $this->validate([
            'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            'code' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u'
        ]);

        $colors = new Color();
        $colors->name = $this->name;
        $colors->code = $this->code;
        $colors->save();

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
