<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin/layout/dashboard');
});

Route::get('/', function () {
    return view('landing');
});

Route::get('/detail', function () {
    return view('detail_pc');
});