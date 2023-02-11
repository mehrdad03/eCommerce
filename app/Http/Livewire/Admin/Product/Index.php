<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('admin.livewire.product.index')->extends('admin.layouts.app');
    }
}
