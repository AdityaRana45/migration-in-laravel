<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeemail;
class Mailcontroller extends Controller
{
    //
    function sendemail(Request $request){
        $to=$request->to;
        $msg=$request->message;
        $subject=$request->subject;
        Mail::to($to)->send(new welcomeemail($msg,$subject));
        return"email sent";
    }

}
