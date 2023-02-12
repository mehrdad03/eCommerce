<?php

namespace App\Http\Livewire\Admin\Size;

use App\Models\Localization;
use App\Models\Size;
use Livewire\Component;

class Index extends Component
{
    public $size = "";
    public $category_id = "";

    public $sizes;
    public $localizations;


    public function save()
    {
        $this->validate([
            'size' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            'category_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u'
        ]);
        $sizes = new Size();
        $sizes->size = $this->size;
        $sizes->category_id = $this->category_id;
        $sizes->save();

        $this->sizes = Size::all();
    }

    public function mount()
    {
        $this->sizes = Size::all();
        $this->localizations = Localization::all();
    }

    public function render()
    {
        $sizes = Size::all();
        $localizations = Localization::all();
        return view('admin.livewire.size.index', ['sizes' => $sizes, 'localizations' => $localizations])->extends('admin.layouts.app');

    }
}
