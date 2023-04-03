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
        Schema::create('drawing_shapes', function (Blueprint $table) {
            $table->id();
            $table->integer('drawing_id');
            $table->integer('shape_id')->comment('alakzat azonosító');
            $table->integer('x_coordinate')->comment('x koordináta');
            $table->integer('y_coordinate')->comment('y koordináta');
        });
    }
    
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drawing_shapes');
    }
};
