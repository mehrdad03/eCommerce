<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class Brand extends Model
{
    use HasFactory;
    use WithFileUploads;

    protected $guarded = [];


    public function saveBrand($formData, $brand_id, $image)
    {
        $extension = $image->extension();
        $image_name = 'brand_' . time() . '.' . $extension;

        Image::make($image)->resize('300', '300')->save('storage/photos/brands/'.$image_name);

        $brand = Brand::query()->updateOrCreate(
            [
                'id' => $brand_id
            ],
            [
                'category_id' => $formData['category_id'],
                'image' => $image_name
            ]
        );
        foreach (config('app.languages') as $locale) {

            Localization::query()->updateOrCreate(
                [
                    'property_id' => $brand->id,
                    'local' => $locale,
                    'type' => 'brand',
                ]
                ,
                [
                    'name' => $formData[$locale],
                ]
            );
        }
    }

    public function locales()
    {
        return $this->hasMany(Localization::class, 'property_id')
            ->where('type', '=', 'brand');
    }

    public function parent()
    {
        return $this->belongsTo(Localization::class, 'category_id');
    }

}
