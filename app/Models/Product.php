<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    function seller(){
        return $this->belongsTo('App\Models\Seller');
    }
}
