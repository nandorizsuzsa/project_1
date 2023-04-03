<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Colors;

class ColorsTableSeed extends Seeder {
        
    public function run() {
        
            Colors::create([
                'color' => 'piros',
                'color_name' => 'red',
                'hex' => 'd62d20'
            ]);
            
            Colors::create([
                'color' => 'kék',
                'color_name' => 'blue',
                'hex' => '0057e7'
            ]);
                        
            Colors::create([
                'color' => 'zöld',
                'color_name' => 'green',
                'hex' => '008744'
            ]);

    }
}