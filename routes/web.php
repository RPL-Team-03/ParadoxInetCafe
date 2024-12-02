<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin/layout/dashboard');
});

Route::get('/', function () {
    return view('landing');
});
