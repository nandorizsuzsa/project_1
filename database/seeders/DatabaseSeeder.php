<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * teszt adat feltöltés        
     */
    public function run(): void
    {    
        $seeds = [
                    'UserTableSeed',                    // user tábla
                    'ColorsTableSeed',                  // colors tábla
                    'ShapeTypesTableSeed',              // shape_types tábla
                    'ShapesTableSeed',                  // shapes tábla
                    'DrawingsTableSeed',                // drawings tábla
                    'DrawingShapesTableSeed'            // drawing_shapes tábla
            ];
        
        foreach ($seeds as $seed) {
            
            echo 'Seeding: ' . $seed . PHP_EOL;
            
            Artisan::call('db:seed', [
                    '--class' => $seed,
                    '--force' => true
                ]);
            
        }
        
    }

}