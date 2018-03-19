<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleTime extends Model
{
      protected $fillable = [ //Quy định những cột đc lưu vào CSDL
        'schedule_id', 
        'time_id',
        'date'; 
        ]
}
