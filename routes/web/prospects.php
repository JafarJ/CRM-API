<?php

use App\Http\Controllers\Admin\Prospects\ProspectsController;


//Prefix: prospects

Route::get('/', [ProspectsController::class, 'index'])->name('dashboard');
Route::get('create', [ProspectsController::class, 'create'])->name('create');
Route::post('store', [ProspectsController::class, 'store'])->name('store');
Route::post('update', [ProspectsController::class, 'update'])->name('update');
Route::post('destroy', [ProspectsController::class, 'destroy'])->name('destroy');
