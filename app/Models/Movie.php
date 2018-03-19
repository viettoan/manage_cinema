<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
    'name',
    'release_date',
    'time',
    'directors',
    'actors',
    'description',
    'status',
    'media_id',     
    ]
}
