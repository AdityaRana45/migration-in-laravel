<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    //
    function productData(){
        return $this->hasONE('App\Models\product');
    }

    function productmanydata(){
        return $this->hasmany('App\Models\Product');
    }
}
