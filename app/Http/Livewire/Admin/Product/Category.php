<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;

class Category extends Component
{
    public function render()
    {
        return view('admin.livewire.product.category')->extends('admin.layouts.app');
    }
}
