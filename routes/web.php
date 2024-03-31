<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcomepg');
});


Route::get('/menu', function () {
    return view('menu');
});