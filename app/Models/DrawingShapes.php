<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DrawingShapes extends Model
{

    protected $table = 'drawing_shapes';
    public $timestamps = false;

    protected $fillable = [ 'drawing_id',
                            'shape_id',
                            'x_coordinate',
                            'y_coordinate'];
   
}
