<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Color extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveColor($formData, $color_id)
    {

        $color = Color::query()->updateOrCreate(
            [
                'id' => $color_id
            ], [
                'code' => $formData['code'],
            ]
        );

        foreach (config('app.languages') as $locale) {

            Localization::query()->updateOrCreate(
                [
                    'property_id' => $color->id,
                    'local' => $locale,
                    'type' => 'color',
                ],
                [
                    'name' => $formData[$locale],

                ]
            );
        }
    }

    public function locales()
    {
        return $this->hasMany(Localization::class, 'property_id')
            ->where('type', '=','color');

    }
}







