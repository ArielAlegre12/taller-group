<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function () {
    return view('pages.principal');
});

Route::get('tienda', function(){
    return view('pages.tienda');
});

Route::get('/servicios', function(){
    return view('pages.servicios');
});

Route::get('/informacionContactos', function(){
    return view('pages.informacionContactos');
});

Route::get('/terminosUsos', function(){
    return view('pages.terminosUsos');
});

Route::get('/consultas', function(){
    return view('pages.consultas');
});

Route::get('/quienesSomos', function(){
    return view('pages.quienesSomos');
});

Route::get('/comercializacion', function(){
    return view('pages.comercializacion');
});