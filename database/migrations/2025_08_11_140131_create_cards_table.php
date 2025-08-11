<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_th');
            $table->string('card_number')->unique();
            $table->string('rarity');
            $table->string('set_name');
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cards');
    }
};