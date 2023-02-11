<?php

namespace App\Http\Livewire\Admin\Transaction;

use Livewire\Component;

class Detail extends Component
{
    public function render()
    {
        return view('admin.livewire.transaction.detail')->extends('admin.layouts.app');
    }
}
