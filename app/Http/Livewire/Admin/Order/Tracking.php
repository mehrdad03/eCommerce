<?php

namespace App\Http\Livewire\Admin\Order;

use Livewire\Component;

class Tracking extends Component
{
    public function render()
    {
        return view('admin.livewire.order.tracking')->extends('admin.layouts.app');
    }
}
