<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveSize($formDate)
    {
        Size::query()->updateOrCreate(
            [
                'size' => $formDate['size'],
                'category_id' => $formDate['category_id']
            ]
        );
    }
}
