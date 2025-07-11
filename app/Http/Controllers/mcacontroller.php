<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mcastudent;

class mcacontroller extends Controller
{
    //
    function list(){
        return mcastudent::all();
    }

    function save(){
        $student= new mcastudent();
        $student->name="bruce banner";
        $student->email="bruce@gmail.com";

        if($student->save()){
            return redirect('list');
        }
    }
}
