<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mcastudent extends Model
{
    //accessor
    function getNameAttribute($value){

        return ucfirst("MR.".$value);
    }
    function getEmailAttribute($value){
        return "@".$value;
    }
//mutators
    function setNameAttribute($value){
        $this->attributes['name']=ucfirst($value);
    }
    function setEmailAttribute($value){
        $this->attributes['email']="@".$value;
    }
}
