<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
   	    protected $fillable = [ //Quy định những cột đc lưu vào CSDL
        'cinema_id', 
        'movie_id', 
        'movie_technology_id'
        ];
}
