<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->foreignId('size_id')->nullable();
            $table->foreignId('color_id')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('currency_id')->constrained();
            $table->foreignId('brand_id')->constrained();
            $table->foreignId('description_id');
            $table->integer('special_offer')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
