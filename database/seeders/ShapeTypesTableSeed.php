<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ShapeTypes;

class ShapeTypesTableSeed extends Seeder {
        
    public function run() {
        
            ShapeTypes::create([
                'name'      => 'kör',
                'code_name' => 'circle',
                'width'     => '0',
                'heigth'    => '0',
                'radius'    => '1'
            ]);

            ShapeTypes::create([
                'name'      => 'téglalap',
                'code_name' => 'rectangle',
                'width'     => '1',
                'heigth'    => '1',
                'radius'    => '0'
            ]);
           
    }
}