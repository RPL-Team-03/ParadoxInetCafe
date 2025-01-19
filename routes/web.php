<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AvailabilityController;
use Illuminate\Support\Facades\Auth;

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.layout.dashboard');
    });

    Route::get('/admin_detail', function () {
        return view('admin.layout.detail_admin');
    });

    Route::get('/update_battle', function() {
        return view('admin.layout.update_battle');
    });

    Route::get('/update_detail', function() {
        return view('admin.layout.update_detail');
    });

    Route::get('form_detail', function() {
        return view('admin.layout.form_detail');
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

Route::post('/update-a1', [AvailabilityController::class, 'updateA1'])->name('update.a1');
Route::post('/update-b1', [AvailabilityController::class, 'updateB1'])->name('update.b1');
Route::post('/update-reguler', [AvailabilityController::class, 'updateReguler'])->name('update.reguler');
Route::post('/update-vvip', [AvailabilityController::class, 'updateVVIP'])->name('update.vvip');

Auth::routes();

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
