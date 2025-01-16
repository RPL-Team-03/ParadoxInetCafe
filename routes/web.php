<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.layout.dashboard');
    });

    Route::get('/admin_detail', function () {
        return view('admin.layout.detail_admin');
    });
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

Route::get('/edit-credentials', [App\Http\Controllers\ProfileController::class, 'edit'])->name('edit.credentials');
Route::post('/edit-credentials', [App\Http\Controllers\ProfileController::class, 'update'])->name('update.credentials');


Auth::routes();

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
