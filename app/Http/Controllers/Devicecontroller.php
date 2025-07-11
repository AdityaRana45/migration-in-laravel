<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;

class Devicecontroller extends Controller
{
    //
    function index(device $key){
        return $key;
    }
}
