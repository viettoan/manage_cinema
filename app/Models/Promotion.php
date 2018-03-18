<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
   protected $fillable = [
   'title',
   'description',
   'content',
   'start',
   'end',
   'sale',
   'status',
   'cinema_id',
   'media_id',
   ]
}
