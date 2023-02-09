<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('localizations', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->text('slug');
            $table->string('type');
            $table->foreignId('property_id')->nullable();
            $table->string('local');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
