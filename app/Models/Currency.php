<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveCurrency($formData, $currency_id)
    {
        $currency = Currency::query()->updateOrCreate(
            [
                'id' => $currency_id
            ],
            [
                'icon' => $formData['icon']
            ]
        );
        foreach (config('app.languages') as $locale) {

            Localization::query()->updateOrCreate(
                [
                    'property_id' => $currency->id,
                    'local' => $locale,
                    'type' => 'currency',
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
            ->where('type', '=', 'currency');

    }
}
