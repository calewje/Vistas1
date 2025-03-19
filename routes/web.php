<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/inicio',function(){
    return view('inicio');
});


Route::get('/sesion',function(){
    return view('sesion');
});

Route::get('/registro',function(){
    return view('registro');
});


Route::get('/home', [InicioController::class,'index']);



Route::get('/vista2', [InicioController::class,'index']);



Route::get('/vista3', [InicioController::class,'jueg']);
