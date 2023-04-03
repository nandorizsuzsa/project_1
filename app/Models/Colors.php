<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Colors extends Model
{

    protected $table = 'colors';
    public $timestamps = true;

    protected $fillable = [ 'color',
                            'color_name',
                            'hex' ];
    
    public static function CheckColor($color){
         return DB::table('colors')->where('color_name', $color)->first();
    }
}
