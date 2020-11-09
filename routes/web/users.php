<?php

use App\Http\Controllers\Admin\Users\UsersController;



//Prefix: users
Route::group(['middleware' => ['admin']], function () {
    Route::get('/', [UsersController::class, 'index'])->name('dashboard');
    Route::get('create', [UsersController::class, 'create'])->name('create');
    Route::post('store', [UsersController::class, 'store'])->name('store');
    Route::post('update', [UsersController::class, 'update'])->name('update');
    Route::post('destroy', [UsersController::class, 'destroy'])->name('destroy');
});