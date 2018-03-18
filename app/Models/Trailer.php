<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    protected $fillable = [ //Quy định những cột đc lưu vào CSDL
        'embedded_code', 
        'movie_id', 
        ];
}
