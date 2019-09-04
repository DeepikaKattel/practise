<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
    //database ma directly fill gardincha
    protected $fillable = [
        'name',
        'roll',
        'class'
    ];
}
