<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveCategory($formData)
    {

        $category = Category::query()->updateOrCreate([
            'category_id' => $formData['category_id'],
            'icon' => $formData['icon'],
        ]);

        Localization::query()->updateOrCreate([
            'name' => $formData['name'],
            'slug' => $formData['slug'],
            'type' => 'category',
            'property_id' =>$category->id,
            'local' => $formData['local']
        ]);
    }
}
