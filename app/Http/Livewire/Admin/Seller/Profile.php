<?php

namespace App\Http\Livewire\Admin\Seller;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('admin.livewire.seller.profile')->extends('admin.layouts.app');
    }
}
