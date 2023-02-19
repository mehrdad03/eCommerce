<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Localization::class, 'category_id');
    }

    public function saveCategory($formData, $cat_id)
    {

        $category = Category::query()->updateOrCreate(
            [
                'id' => $cat_id
            ],
            [
                'category_id' => $formData['category_id'],
                'icon' => $formData['icon'],
            ]
        );

        Localization::query()->updateOrCreate(
            [
                'property_id' => $cat_id
            ],
            [
                'name' => $formData['name'],
                'slug' => Str::slug($formData['name']),
                'type' => 'category',
                'property_id' => $category->id,
               // 'local' => $formData['local']
            ]
        );
    }
}
