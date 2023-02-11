<?php

namespace App\Http\Livewire\Admin\Review;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('admin.livewire.review.index')->extends('admin.layouts.app');
    }
}
