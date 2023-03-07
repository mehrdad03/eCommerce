<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
        DB::transaction(function () use ($image, $brand_id, $formData) {

            $image_name = '';
            if ($image) {
                $extension = $image->extension();
                $image_name = 'brand_' . Str::random(10) . time() . '.' . $extension;
                if ($brand_id != 0) {

                    $brandFileName = File::query()->where([
                        'product_id' => $brand_id,
                        'type' => 'brand',
                    ])->pluck('name')->first();
                    unlink('images/brands/' . $brandFileName);
                }
                Image::make($image)->crop('300', '300')->save(public_path('images/brands/' . $image_name));
            }

            $brand = $this->insertToBrandTable($brand_id, $formData);
            $this->insertToLocalizationsTable($brand->id, $formData);
            if ($image) {
                $this->insertToFileTable($brand->id, $image_name);
            }

        });
    }

    public function insertToBrandTable($brand_id, $formData)
    {
        return Brand::query()->updateOrCreate(
            [
                'id' => $brand_id
            ],
            [
                'category_id' => $formData['category_id'],

            ]
        );

    }

    public function insertToFileTable($brand_id, $image_name)
    {
        File::query()->updateOrCreate([
            'product_id' => $brand_id,
            'type' => 'brand'
        ], [
            'name' => $image_name,
        ]);
    }

    public function insertToLocalizationsTable($brand_id, $formData)
    {
        foreach (config('app.languages') as $locale) {

            Localization::query()->updateOrCreate(
                [
                    'property_id' => $brand_id,
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

    public function local()
    {
        return $this->belongsTo(Localization::class, 'category_id');
    }

    public function file()
    {
        return $this->belongsTo(File::class, 'id', 'product_id')->where('type', '=', 'brand');

    }


}
