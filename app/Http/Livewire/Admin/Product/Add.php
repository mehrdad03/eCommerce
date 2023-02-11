<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;

class Add extends Component
{
    public function render()
    {
        return view('admin.livewire.product.add')->extends('admin.layouts.app');
    }
}
