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
        Schema::create('shapes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('user azonosító');
            $table->integer('shape_type_id')->nullable(false)->comment('alakzat azonosító');
            $table->integer('color_id')->nullable(false)->comment('szin azonosító');
            $table->text('parameters', 100)->nullable(false)->xomment('paraméterek - shape_type attrtibutumok alapján');
            $table->timestamps();
            
        });
    }
    
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shapes');
    }
};
