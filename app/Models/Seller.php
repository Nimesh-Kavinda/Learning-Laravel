<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
        use HasFactory;
    
    function ProductData(){
        return $this->hasOne('App\Models\Product');
    }

    function ProductMany(){
        return $this->hasMany('App\Models\Product');
    }

}
