<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seller;
use App\Models\product;
class Sellercontroller extends Controller
{
    //
    function list(){
        return seller::find(1)->productData;
        
    }

    function manyrel(){
        return seller:: find(1)->productmanydata;
    }

    function manyto1(){
        $data = product::with("seller")->get();
        return $data;
    }


}
