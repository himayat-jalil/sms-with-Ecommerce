<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['session_year'];
    public function students(){
        return $this->hasMany(Student::class);
    }
}