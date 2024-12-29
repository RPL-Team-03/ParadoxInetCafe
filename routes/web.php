<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin/layout/dashboard');
});

Route::get('/admin_detail', function () {
    return view('admin/layout/detail_admin');
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

Route::get('/BattleArena_A1', function () {
    return view('battle_arenaA1');
});

Route::get('/BattleArena_B1', function () {
    return view('battle_arenaB1');
});