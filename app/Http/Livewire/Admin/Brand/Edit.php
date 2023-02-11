<?php

namespace App\Http\Livewire\Admin\Brand;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('admin.livewire.brand.edit')->extends('admin.layouts.app');
    }
}
