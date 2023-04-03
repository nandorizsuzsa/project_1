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
        Schema::create('shape_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)->unique()->comment('alakzat neve');
            $table->string('code_name', 20)->unique()->comment('angol neve');
            $table->boolean('width')->comment('szélesség');
            $table->boolean('heigth')->comment('magasság');
            $table->boolean('radius')->comment('sugár');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shape_types');
    }
};
