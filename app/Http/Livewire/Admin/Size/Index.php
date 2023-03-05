<?php

namespace App\Http\Livewire\Admin\Size;

use App\Models\Localization;
use App\Models\Size;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public $name = '', $category_id = '', $size_id;
    protected $listeners = ['delete'];

    public function saveSize($formData, Size $sizes)
    {
        if ($this->size_id != null) {
            $size_id = $this->size_id;
            $validator = Validator::make($formData, [
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'category_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $size_id = 0;
            $validator = Validator::make($formData, [
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'category_id' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }

        $validator->validate();
        $this->resetValidation();
        $sizes->saveSize($formData, $size_id);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        $this->name = '';
        $this->category_id = '';
        $this->size_id = '';

    }

    public function editSize($size_id)
    {
        $size = Size::query()->where('id', $size_id)->first();

        $sizeLocale = Localization::query()->where([
            'property_id' => $size_id,
            'type' => 'size',
        ])->first();


        $this->name = $sizeLocale->name;
        $this->category_id = $size->category_id;
        $this->size_id = $size->id;
    }
    public function deleteConfirm($id)
    {

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => trans('alerts.warning'),
            'text' => '',
            'id' => $id
        ]);
    }

    public function delete($size_id)
    {
        Size::query()->where('id', $size_id)->delete();
        Localization::query()->where([
            'property_id' => $size_id,
            'type' => 'size',
        ])->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);

    }

    public function render()
    {
        $sizes = Size::all();
        $localizations = Localization::all();
        return view('admin.livewire.size.index', ['sizes' => $sizes, 'localizations' => $localizations])->extends('admin.layouts.app');
    }
}
