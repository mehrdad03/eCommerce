<?php

namespace App\Http\Livewire\Admin\Size;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('admin.livewire.size.create')->extends('admin.layouts.app');
    }
}