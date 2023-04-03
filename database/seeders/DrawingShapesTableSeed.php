<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\DrawingShapes;

class DrawingShapesTableSeed extends Seeder {
        
    public function run() {
        
    // user_1  drawings_1-6     shapes_1-6
        // user_1_1 5 alakzat
            DrawingShapes::create([
                'drawing_id'   => 1,
                'shape_id'     => 1,
                'x_coordinate' => 100,
                'y_coordinate' => 120
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 1,
                'shape_id'     => 2,
                'x_coordinate' => 50,
                'y_coordinate' => 130
            ]);

            DrawingShapes::create([
                'drawing_id'   => 1,
                'shape_id'     => 2,
                'x_coordinate' => 180,
                'y_coordinate' => 300
            ]);

            DrawingShapes::create([
                'drawing_id'   => 1,
                'shape_id'     => 4,
                'x_coordinate' => 25,
                'y_coordinate' => 55
            ]);

            DrawingShapes::create([
                'drawing_id'   => 1,
                'shape_id'     => 6,
                'x_coordinate' => 89,
                'y_coordinate' => 75
            ]);
            
        // user_1_2 3 alakzat
            DrawingShapes::create([
                'drawing_id'   => 2,
                'shape_id'     => 5,
                'x_coordinate' => 20,
                'y_coordinate' => 40
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 2,
                'shape_id'     => 3,
                'x_coordinate' => 40,
                'y_coordinate' => 80
            ]);

            DrawingShapes::create([
                'drawing_id'   => 2,
                'shape_id'     => 6,
                'x_coordinate' => 60,
                'y_coordinate' => 60
            ]);
            
        // user_1_3 3 alakzat
            DrawingShapes::create([
                'drawing_id'   => 3,
                'shape_id'     => 1,
                'x_coordinate' => 80,
                'y_coordinate' => 80
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 3,
                'shape_id'     => 2,
                'x_coordinate' => 80,
                'y_coordinate' => 80
            ]);

            DrawingShapes::create([
                'drawing_id'   => 3,
                'shape_id'     => 3,
                'x_coordinate' => 80,
                'y_coordinate' => 80
            ]);    
            
        // user_1_4 2 alakzat
            DrawingShapes::create([
                'drawing_id'   => 4,
                'shape_id'     => 3,
                'x_coordinate' => 35,
                'y_coordinate' => 40
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 4,
                'shape_id'     => 5,
                'x_coordinate' => 140,
                'y_coordinate' => 80
            ]);

        // user_1_5 1 alakzat
            DrawingShapes::create([
                'drawing_id'   => 5,
                'shape_id'     => 6,
                'x_coordinate' => 100,
                'y_coordinate' => 100
            ]);
        
        // user_1_6 3 alakzat
            DrawingShapes::create([
                'drawing_id'   => 6,
                'shape_id'     => 1,
                'x_coordinate' => 140,
                'y_coordinate' => 80
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 6,
                'shape_id'     => 3,
                'x_coordinate' => 80,
                'y_coordinate' => 120
            ]);

            DrawingShapes::create([
                'drawing_id'   => 6,
                'shape_id'     => 5,
                'x_coordinate' => 110,
                'y_coordinate' => 20
            ]);

            
    //user.2  7-11    7-12
        // user_2_7 3 alakzat    
            DrawingShapes::create([
                'drawing_id'   => 7,
                'shape_id'     => 7,
                'x_coordinate' => 110,
                'y_coordinate' => 20
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 7,
                'shape_id'     => 8,
                'x_coordinate' => 50,
                'y_coordinate' => 40
            ]);

            DrawingShapes::create([
                'drawing_id'   => 7,
                'shape_id'     => 12,
                'x_coordinate' => 15,
                'y_coordinate' => 50
            ]);
        
        // user_2_8 1 alakzat    
            DrawingShapes::create([
                'drawing_id'   => 8,
                'shape_id'     => 11,
                'x_coordinate' => 50,
                'y_coordinate' => 60
            ]);
        
        // user_2_9 5 alakzat    
            DrawingShapes::create([
                'drawing_id'   => 9,
                'shape_id'     => 7,
                'x_coordinate' => 20,
                'y_coordinate' => 110
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 9,
                'shape_id'     => 8,
                'x_coordinate' => 48,
                'y_coordinate' => 5
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 9,
                'shape_id'     => 9,
                'x_coordinate' => 35,
                'y_coordinate' => 75
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 9,
                'shape_id'     => 10,
                'x_coordinate' => 28,
                'y_coordinate' => 59
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 9,
                'shape_id'     => 12,
                'x_coordinate' => 60,
                'y_coordinate' => 110
            ]);

        // user_2_10 4 alakzat    
            DrawingShapes::create([
                'drawing_id'   => 10,
                'shape_id'     => 8,
                'x_coordinate' => 60,
                'y_coordinate' => 33
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 10,
                'shape_id'     => 9,
                'x_coordinate' => 50,
                'y_coordinate' => 11
            ]);
                        
            DrawingShapes::create([
                'drawing_id'   => 10,
                'shape_id'     => 10,
                'x_coordinate' => 60,
                'y_coordinate' => 60
            ]);
                                    
            DrawingShapes::create([
                'drawing_id'   => 10,
                'shape_id'     => 11,
                'x_coordinate' => 70,
                'y_coordinate' => 70
            ]);

        // user_2_11 3 alakzat    
            DrawingShapes::create([
                'drawing_id'   => 11,
                'shape_id'     => 7,
                'x_coordinate' => 60,
                'y_coordinate' => 140
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 11,
                'shape_id'     => 9,
                'x_coordinate' => 50,
                'y_coordinate' => 120
            ]);

            DrawingShapes::create([
                'drawing_id'   => 11,
                'shape_id'     => 12,
                'x_coordinate' => 25,
                'y_coordinate' => 50
            ]);
            
    //user.3  12-13   13-21          
        // user_3_12 3 alakzat    
            DrawingShapes::create([
                'drawing_id'   => 12,
                'shape_id'     => 13,
                'x_coordinate' => 20,
                'y_coordinate' => 50
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 12,
                'shape_id'     => 15,
                'x_coordinate' => 40,
                'y_coordinate' => 55
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 12,
                'shape_id'     => 16,
                'x_coordinate' => 100,
                'y_coordinate' => 80
            ]);
            
        // user_3_13 7 alakzat    
            DrawingShapes::create([
                'drawing_id'   => 13,
                'shape_id'     => 21,
                'x_coordinate' => 35,
                'y_coordinate' => 80
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 13,
                'shape_id'     => 20,
                'x_coordinate' => 40,
                'y_coordinate' => 20
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 13,
                'shape_id'     => 20,
                'x_coordinate' => 30,
                'y_coordinate' => 10
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 13,
                'shape_id'     => 18,
                'x_coordinate' => 75,
                'y_coordinate' => 120
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 13,
                'shape_id'     => 17,
                'x_coordinate' => 55,
                'y_coordinate' => 120
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 13,
                'shape_id'     => 15,
                'x_coordinate' => 60,
                'y_coordinate' => 100
            ]);
            
            DrawingShapes::create([
                'drawing_id'   => 13,
                'shape_id'     => 13,
                'x_coordinate' => 75,
                'y_coordinate' => 25
            ]);
            
    }
}