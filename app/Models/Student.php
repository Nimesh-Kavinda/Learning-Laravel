<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = "colstudents";

    function testFunc(){
        return 'dummy fun';
    }

}
