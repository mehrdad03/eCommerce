<?php

namespace App\Http\Livewire\Admin\Color;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('admin.livewire.color.edit')->extends('admin.layouts.app');
    }
}
