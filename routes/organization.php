<?php

//orginization dashboard

use Illuminate\Support\Facades\Route;

Route::get('/organization/welcome', function () {
    return view('organization.welcome');
})->middleware(['auth'])->name('organization.welcome');
