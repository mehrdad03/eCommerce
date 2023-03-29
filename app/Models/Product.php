<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class Product extends Model
{
    use HasFactory;
    use WithFileUploads;

    protected $guarded = [];


    public function saveProduct($formData, $product_id, $image)
    {
        DB::transaction(function () use ($image, $product_id, $formData) {
            $image_name = '';
            if ($image) {
                $extension = $image->extension();
                $image_name = 'product_' . Str::random(10) . time() . '.' . $extension;
                if ($product_id != 0) {

                    $productFileName = File::query()->where([
                        'product_id' => $product_id,
                        'type' => 'product',
                    ])->pluck('name')->first();
                    unlink('images/products/' . $productFileName);
                }
                Image::make($image)->crop('300', '300')->save(public_path('images/product/' . $image_name));
            }

            $product = $this->insertToProductTable($product_id, $formData);
            $this->insertToLocalizationsTable($product->id, $formData);
            if ($image) {
                $this->insertToFileTable($product->id, $image_name);
            }
        });
    }

    public function insertToProductTable($product_id, $formData)
    {
        return Product::query()->updateOrCreate(
            [
                'id' => $product_id
            ],
            [
                'brand_id' => $formData['brand_id'],
                'code' => $formData['code'],
                'price' => $formData['price'],
                'quantity' => $formData['quantity'],
                'discount' => $formData['discount'],
                'status' => 'enable',
                'size_id' => $formData['size_id'],
                'color_id' => $formData['color_id'],
                'category_id' => $formData['category_id'],
                'currency_id' => 1,
                'description_id' => 2,
                'special_offer' => 0
            ]
        );
    }

    public function insertToFileTable($product_id, $image_name)
    {
        File::query()->updateOrCreate(
            [
                'product_id' => $product_id,
                'type' => 'product'
            ],
            [
                'name' => $image_name,
            ]
        );
    }

    public function insertToLocalizationsTable($product_id, $formData)
    {
        foreach (config('app.languages') as $locale) {

            Localization::query()->updateOrCreate(
                [
                    'property_id' => $product_id,
                    'local' => $locale,
                    'type' => 'product',
                ]
                ,
                [
                    'name' => $formData[$locale],
                ]
            );
        }
    }


    public function local()
    {
        return $this->belongsTo(Localization::class, 'property_id');
    }

    public function color()
    {
        return $this->belongsTo(Localization::class, 'property_id')
            ->where('type', '=', 'color');
    }

    public function size()
    {
        return $this->belongsTo(Localization::class, 'property_id')
            ->where('type', '=', 'size');
    }

}
