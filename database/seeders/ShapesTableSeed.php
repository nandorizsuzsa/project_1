<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Shapes;

class ShapesTableSeed extends Seeder {
        
    public function run() {

    //1.user - 3kör,3négyzet
            Shapes::create([
                'user_id'       => 1,
                'shape_type_id' => 1,
                'color_id'      => 1,
                'parameters'    => '{"radius":"10"}'
            ]);

            Shapes::create([
                'user_id'       => 1,
                'shape_type_id' => 1,
                'color_id'      => 2,
                'parameters'    => '{"radius":"32"}'
            ]);

            Shapes::create([
                'user_id'       => 1,
                'shape_type_id' => 1,
                'color_id'      => 3,
                'parameters'    => '{"radius":"44"}'
            ]);
            
            Shapes::create([
                'user_id'       => 1,
                'shape_type_id' => 2,
                'color_id'      => 1,
                'parameters'    => '{"width":"15","heigth":"15}'
            ]);

            Shapes::create([
                'user_id'       => 1,
                'shape_type_id' => 2,
                'color_id'      => 2,
                'parameters'    => '{"width":"20","heigth":"35}'
            ]);

            Shapes::create([
                'user_id'       => 1,
                'shape_type_id' => 2,
                'color_id'      => 3,
                'parameters'    => '{"width":"39","heigth":"17}'
            ]);
            
    //2.user - 2kör, 4 téglalap        
            Shapes::create([
                'user_id'       => 2,
                'shape_type_id' => 1,
                'color_id'      => 1,
                'parameters'    => '{"radius":"18"}'
            ]);

            Shapes::create([
                'user_id'       => 2,
                'shape_type_id' => 1,
                'color_id'      => 2,
                'parameters'    => '{"radius":"55"}'
            ]);

            Shapes::create([
                'user_id'       => 2,
                'shape_type_id' => 2,
                'color_id'      => 3,
                'parameters'    => '{"width":"22","heigth":"44}'
            ]);
            
            Shapes::create([
                'user_id'       => 2,
                'shape_type_id' => 2,
                'color_id'      => 1,
                'parameters'    => '{"width":"22","heigth":"22}'
            ]);

            Shapes::create([
                'user_id'       => 2,
                'shape_type_id' => 2,
                'color_id'      => 2,
                'parameters'    => '{"width":"45","heigth":"17}'
            ]);

            Shapes::create([
                'user_id'       => 2,
                'shape_type_id' => 2,
                'color_id'      => 3,
                'parameters'    => '{"width":"33","heigth":"12}'
            ]);
            
        //3.user -5kör-mind piros, 4négyzet       
            Shapes::create([
                'user_id'       => 3,
                'shape_type_id' => 1,
                'color_id'      => 1,
                'parameters'    => '{"radius":"11"}'
            ]);

            Shapes::create([
                'user_id'       => 3,
                'shape_type_id' => 1,
                'color_id'      => 2,
                'parameters'    => '{"radius":"22"}'
            ]);

            Shapes::create([
                'user_id'       => 3,
                'shape_type_id' => 1,
                'color_id'      => 2,
                'parameters'    => '{"radius":"22"}'
            ]);

            Shapes::create([
                'user_id'       => 3,
                'shape_type_id' => 1,
                'color_id'      => 3,
                'parameters'    => '{"radius":"33"}'
            ]);

            Shapes::create([
                'user_id'       => 3,
                'shape_type_id' => 1,
                'color_id'      => 3,
                'parameters'    => '{"radius":"19"}'
            ]);

            Shapes::create([
                'user_id'       => 3,
                'shape_type_id' => 2,
                'color_id'      => 3,
                'parameters'    => '{"width":"15","heigth":"30}'
            ]);
            
            Shapes::create([
                'user_id'       => 3,
                'shape_type_id' => 2,
                'color_id'      => 1,
                'parameters'    => '{"width":"27","heigth":"27}'
            ]);

            Shapes::create([
                'user_id'       => 3,
                'shape_type_id' => 2,
                'color_id'      => 2,
                'parameters'    => '{"width":"43","heigth":"13}'
            ]);

            Shapes::create([
                'user_id'       => 3,
                'shape_type_id' => 2,
                'color_id'      => 3,
                'parameters'    => '{"width":"26","heigth":"26}'
            ]);
            
        //4.user - nincs alakzata!
    }
}
