<?php
use App\Http\Controllers\Devicecontroller;
use App\Http\Controllers\inlineController;
use Illuminate\Support\Str;
use App\Http\Controllers\Mailcontroller;
use App\Http\Controllers\mcacontroller;
use App\Http\Controllers\Sellercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('list',[mcacontroller::class,'list']);


Route::get('save',[mcacontroller::class,'save']);


Route::get('data',[Sellercontroller::class,'list']);
Route::get('many',[Sellercontroller::class,'manyrel']);
Route::get('manyto1',[Sellercontroller::class,'manyto1']);

Route::view('send-email','send-email');
Route::post('sendemail',[Mailcontroller::class,'sendemail']);


Route::view('fluent-string','fluent-string');
$info="hi, lets learn fluent string";


Route::get('device/{key:member_id}',[Devicecontroller::class,'index']);

Route::get('inline',[inlineController::class,'productlist']);