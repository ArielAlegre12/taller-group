<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',function(){
    return view('pages.prueba');
});

Route::get('/principal', function () {
    return view('pages/principal');
});

Route::get('/tienda', function(){
    return view('pages/tienda');
});