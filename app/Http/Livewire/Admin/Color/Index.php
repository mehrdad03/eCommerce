<?php

namespace App\Http\Livewire\Admin\Color;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('admin.livewire.color.index')->extends('admin.layouts.app');
    }
}
