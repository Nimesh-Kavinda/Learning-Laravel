<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    function getNameAttribute($val){
        return ucfirst($val);
    }

    function setNameAttribute($val){
        return $this->attributes['name'] = ucfirst($val);
    }

    function setPhoneAttribute($val){
        return $this->attributes['phone'] = "+94".$val;
    }

   
}
