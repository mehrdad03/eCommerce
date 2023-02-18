<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function parent()
    {
        return $this->belongsTo(Localization::class,'category_id');
    }

    public function saveSize($formDate, $size_id)
    {
        Size::query()->updateOrCreate(
            [
                'id' => $size_id
            ],
            [
                'size' => $formDate['size'],
                'category_id' => $formDate['category_id']
            ]
        );
    }
}
