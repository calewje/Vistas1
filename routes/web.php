<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/inicio',function(){
    return view('inicio');
});


Route::get('/papular',function(){
    return view('papular');
});

Route::get('/genero',function(){
    return view('genero');
});
Route::get('/isekai',function(){
    return view('isekai');
});
Route::get('/papular',function(){
    return view('papular');
});
Route::get('/shonen',function(){
    return view('shonen');
});
Route::get('/envivo',function(){
    return view('envivo');
});


Route::get('/home', [InicioController::class,'index']);



Route::get('/vista2', [InicioController::class,'index']);



Route::get('/vista3', [InicioController::class,'jueg']);
