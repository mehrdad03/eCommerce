<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveBrand($formData, $brand_id)
    {
        $brand = Brand::query()->updateOrCreate(
            [
                'id' => $brand_id
            ],
            [
                'category_id' => $formData['category_id']
            ]
        );
        Localization::query()->updateOrCreate(
            [
                'property_id'=>$brand_id
            ]
            ,
            [
                'name' => $formData['name'],
                'slug' => $formData['slug'],
                'type' => 'brand',
                'property_id' => $brand->id,
                'local' => $formData['local']
            ]
        );
    }

}
