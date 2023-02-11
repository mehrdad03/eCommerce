<?php

namespace App\Http\Livewire\Admin\Order;

use Livewire\Component;

class Invoice extends Component
{
    public function render()
    {
        return view('admin.livewire.order.invoice')->extends('admin.layouts.app');
    }
}
