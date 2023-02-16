<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Color extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveColor($formData, $color_id)
    {

        Color::query()->updateOrCreate(
            [
                'id' => $color_id
            ], [
                'name' => $formData['name'],
                'code' => $formData['code'],
            ]
        );
    }
}







