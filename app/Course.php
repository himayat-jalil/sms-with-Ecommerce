<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function sclass(){
        return $this->belongsTo(Sclass::class);
    }
}