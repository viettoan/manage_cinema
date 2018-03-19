<?php

namespace App\Models; //Đường dẫn

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ //Quy định những cột đc lưu vào CSDL
        'name', 
        'email', 
        'password',
        'gender',
        'address',
        'role',
        'avatar',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
