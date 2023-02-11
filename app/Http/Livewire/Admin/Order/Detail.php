<?php

namespace App\Http\Livewire\Admin\Order;

use Livewire\Component;

class Detail extends Component
{
    public function render()
    {
        return view('admin.livewire.order.detail')->extends('admin.layouts.app');
    }
}
