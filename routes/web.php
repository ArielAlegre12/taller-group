<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function () {
    return view('pages/principal');
});

Route::get('/tienda', function(){
    return view('pages/tienda');
});

Route::get('/servicios', function(){
    return view('pages/servicios');
});