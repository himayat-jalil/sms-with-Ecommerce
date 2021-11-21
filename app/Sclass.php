<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sclass extends Model
{
    protected $fillable = ['class_name','offered_date'];
    

    public function students(){
        return $this->hasMany(Student::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
}