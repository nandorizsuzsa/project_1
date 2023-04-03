<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Drawings;

class DrawingsTableSeed extends Seeder {
        
    public function run() {

        //1.user - 6 rajz
            Drawings::create([
                'user_id'       => 1,
                'drawing_name'  => 'picture one'
            ]);

            Drawings::create([
                'user_id'       => 1,
                'drawing_name'  => 'picture two'
            ]);
            
            Drawings::create([
                'user_id'       => 1,
                'drawing_name'  => 'picture three'
            ]);
            
            Drawings::create([
                'user_id'       => 1,
                'drawing_name'  => 'picture four'
            ]);
            
            Drawings::create([
                'user_id'       => 1,
                'drawing_name'  => 'picture five'
            ]);
            
            Drawings::create([
                'user_id'       => 1,
                'drawing_name'  => 'picture six'
            ]);
            
        //2.user - 5 rajz    
            
            Drawings::create([
                'user_id'       => 2,
                'drawing_name'  => 'fantasy I.'
            ]);
            
            Drawings::create([
                'user_id'       => 2,
                'drawing_name'  => 'fantasy II.'
            ]);
            
            Drawings::create([
                'user_id'       => 2,
                'drawing_name'  => 'fantasy III.'
            ]);
            
            Drawings::create([
                'user_id'       => 2,
                'drawing_name'  => 'fantasy IV.'
            ]);
            
            Drawings::create([
                'user_id'       => 2,
                'drawing_name'  => 'fantasy V.'
            ]);

        
        //3.user - 2 rajz
            Drawings::create([
                'user_id'       => 3,
                'drawing_name'  => 'rajz egy'
            ]);
            
            Drawings::create([
                'user_id'       => 3,
                'drawing_name'  => 'rajz kettő'
            ]);
                        
        //4.user - nincs alakzat, nincs rajz!
     }
}