<?php

namespace App\Http\Livewire\Admin\Color;

use App\Models\Color;
use App\Models\Localization;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{


    public $names = [], $code = '', $color_id;
    protected $listeners = ['delete', 'saveColor'];

    public function saveColor($formData, Color $colors)
    {

        $languages = [];
        foreach (config('app.languages') as $locale) {

            $languages[] = $locale;
        }
        $rules = [];

        if ($this->color_id != null) {
            $color_id = $this->color_id;
            foreach ($languages as $lang) {

                $rules[$lang] = "required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u";
            }
        } else {
            $color_id = 0;
            foreach ($languages as $lang) {

                $rules[$lang] = "required |unique:localizations,name| regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u";
            }

        }

        $rules['code'] = 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u';

        $validator = Validator::make($formData, $rules);
        $validator->validate();
        $this->resetValidation();
        $colors->saveColor($formData, $color_id);


        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        //reset values after edit


        $this->names = [];
        $this->code = '';
        $this->color_id = '';


    }


    public function editColor($color_id)
    {
        $color = Color::query()->where('id', $color_id)->first();
        $colorLocales = Localization::query()->where([
            'property_id' => $color_id,
            'type' => 'color',
        ])->get();

        foreach ($colorLocales as $locale) {
            $this->names[$locale->local] = $locale->name;
        }

        $this->code = $color->code;
        $this->color_id = $color->id;
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


    public function delete($color_id)
    {
        Color::query()->where('id', $color_id)->delete();
        Localization::query()->where([
            'property_id' => $color_id,
            'type' => 'color',
        ])->delete();

        $this->dispatchBrowserEvent('success', [
            'message' => 'The operation was successful'
        ]);



    }

    public function render()
    {
        $colors = Color::with('locales')->get();

        return view('admin.livewire.color.index', ['colors' => $colors])->extends('admin.layouts.app');
    }
}
