<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class inlineController extends Controller
{
    //
    function productlist(){
        $totalproducts=20;

        return Blade::render('<h1>{{$total}}products</h1>',['total'=>$totalproducts]);
    }
}
