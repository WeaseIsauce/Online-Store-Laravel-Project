<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

     
    protected $fillable = [
        'name', 'email', 'password','admin','address','city','state','country','pincode','mobile'
    ];

  
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function isAdmin(){
        return ($this->admin == 1);
    }
}
