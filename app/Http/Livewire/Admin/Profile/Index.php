<?php

namespace App\Http\Livewire\Admin\Profile;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('admin.livewire.profile.index')->extends('admin.layouts.app');
    }
}
