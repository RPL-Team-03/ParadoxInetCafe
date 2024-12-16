<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin/layout/dashboard');
});

Route::get('/', function () {
    return view('landing');
});

Route::get('/reguler', function () {
    return view('reguler');
});

Route::get('/vvip', function () {
    return view('vvip');
});

Route::get('/BattleArena', function () {
    return view('battle_arena');
});