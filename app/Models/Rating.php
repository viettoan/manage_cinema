<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
    'movie_id',
    'user_id',
    'value',
    ]
}
