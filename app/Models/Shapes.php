<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Shapes extends Model
{

    protected $table = 'shapes';
    public $timestamps = true;

    protected $fillable = [ 'user_id',
                            'shape_type_id',
                            'color_id',
                            'parameters' ];

    public static function CheckUserShapes($user_id){
         return DB::table('shapes')->where('user_id', $user_id)->get();
    }
}
