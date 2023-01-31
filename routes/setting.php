<?php

use App\Http\Controllers\Setting\UsersController;
use App\Http\Controllers\Test\TestController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix("setting")->group(function () {
    Route::prefix("users")->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('setting.users.index');
        Route::get('/create', [UsersController::class, 'create'])->name('setting.users.create');
        Route::post('/store', [UsersController::class, 'store'])->name('setting.users.store');
        Route::get('/show/{id}', [UsersController::class, 'show'])->name('setting.users.show');
        Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('setting.users.edit');
        Route::put('/update/{id}', [UsersController::class, 'update'])->name('setting.users.update');
        Route::delete('/destroy/{id}', [UsersController::class, 'destroy'])->name('setting.users.destroy');
    });
});

Route::get('/test/data', [TestController::class, 'test'])->name('test.users.index');
