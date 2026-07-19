<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ppm-list');
});

Route::get('/form', function () {
    return view('ppm-form');
});

Route::get('/detail', function () {
    return view('ppm-detail');
});
