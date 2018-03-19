<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
	    protected $fillable = [ //Quy định những cột đc lưu vào CSDL
        'name', 
        'description', 
        ];
    
}
