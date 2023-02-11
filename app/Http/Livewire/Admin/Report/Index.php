<?php

namespace App\Http\Livewire\Admin\Report;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('admin.livewire.report.index')->extends('admin.layouts.app');
    }
}
