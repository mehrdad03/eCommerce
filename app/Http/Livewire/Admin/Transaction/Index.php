<?php

namespace App\Http\Livewire\Admin\Transaction;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('admin.livewire.transaction.index')->extends('admin.layouts.app');
    }
}
