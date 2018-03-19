<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'title',
    'description',
    'contents',
    'status',
    'media_id',
    'user_id',
    'type',
    ]
}
