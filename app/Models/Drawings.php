<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Drawings extends Model
{

    protected $table = 'drawings';
    public $timestamps = true;

    protected $fillable = [ 'user_id',
                            'drawing_name'];
   
}
