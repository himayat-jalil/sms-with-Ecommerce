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
        'childName',
        'gender',
        'birthDate',
        'placeOfBirth',
        'homeAddress',
        'homePhone',
        'momCellPhone',
        'dadCellPhone',
        'FatherName',
        'workPlace',
        'occupation',
        'email',
        'permanentAddress',
        'currentAddress',
        'admissionDate',
        'password',
        'imageURL'
        
    ];
     protected $hidden = [
     'password', 'remember_token',
     ];
     public function sclasses(){
         return $this->belongsTo(Sclass::class,'class_id');
     }
     public function session(){
         return $this->belongsTo(Session::class);
     }
}