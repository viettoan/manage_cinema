<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $fillable = [
    'cinema_system_id',
    'name',
    'city_id'
    'address',
    'description',
    'media_id',
    'status',
    ]
}
