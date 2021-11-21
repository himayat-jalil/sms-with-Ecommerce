<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'class_id',
        'session_id',
        'name',
        'fname',
        'phone',
        'email',
        'password',
        
    ];
     protected $hidden = [
     'password', 'remember_token',
     ];
     public function sclass(){
         return $this->belongsTo(Sclass::class);
     }
     public function session(){
         return $this->belongsTo(Session::class);
     }
}