<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('color', 20)->nullable(false)->comment('megnevezés');
            $table->string('color_name', 20)->nullable(false)->comment('angol név, api azonosításhoz');
            $table->string('hex', 6)->nullable(false)->unique()->comment('hexa kód');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
