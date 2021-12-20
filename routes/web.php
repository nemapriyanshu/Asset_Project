<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aserttype;
use App\Http\Controllers\asertdata;
use App\Http\Controllers\assetimage;

Route::get('/', function () {
    return view('auth.login');
});
// Route::view('/dashboard','include.dashboard');
Route::get('/showasset',[aserttype::class,'showdata']);

Route::get('/addasert',[aserttype::class,'addasert']);

Route::post('/insertdata',[aserttype::class,'insertdata']);

Route::get("/delete/{id}",[aserttype::class,'delete']);

Route::get("/edit/{id}",[aserttype::class,'edit']);

Route::post("/updatedata/{id}",[aserttype::class,'updatedata']);

// ---------------------------------------------------ADD CATEGORYSS--------------------------------------------




Route::get('/addasetitems',[asertdata::class,'addasetitem']);

Route::post('/insertasetdata',[asertdata::class,'insertasetdatas']);

Route::get('/showassetdata',[asertdata::class,'showassetdata']);

Route::get("/asetdelete/{id}",[asertdata::class,'assetdelete']);

Route::get("/asetedit/{id}",[asertdata::class,'assetedit']);

Route::post('/upadateasetdata/{id}',[asertdata::class,'updateasset']);

Route::get('/showimage/{id}',[asertdata::class,'showimage']);

Route::get("/status/{id}/{cd}",[asertdata::class,'status']);

Route::get('/graph',[asertdata::class,'graphdata']);



Route::get('/changepassword',[asertdata::class,'changepassword']);



Route::post('/donepassword/{id}',[asertdata::class,'donepassword']);


Route::get('/changeimage',[asertdata::class,'changeimage']);


Route::post('/doneimage/{id}',[asertdata::class,'doneimage']);















Auth::routes();

Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
