<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ShapeTypes extends Model
{

    protected $table = 'shape_types';
    public $timestamps = true;

    protected $fillable = [ 'name',
                            'code_name',
                            'width',
                            'heigth',
                            'radius' ];
     
    public static function CheckShapeTypes($shape_type){
         return DB::table('shape_types')->where('code_name', $shape_type)->first();
    }
}
