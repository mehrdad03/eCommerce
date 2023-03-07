<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveSize($formDate, $size_id)
    {
        $size = Size::query()->updateOrCreate(
            [
                'id' => $size_id
            ],
            [
                'category_id' => $formDate['category_id']
            ]
        );

        Localization::query()->updateOrCreate(
            [
                'property_id' => $size->id,
                'local' => 'en',
                'type' => 'size'
            ],
            [
                'name' => $formDate['name']
            ]
        );
    }


    public function locales()
    {
        return $this->hasMany(Localization::class, 'property_id')
            ->where('type', '=', 'size');
    }

    public function local()
    {
        return $this->belongsTo(Localization::class, 'category_id');
    }
}
