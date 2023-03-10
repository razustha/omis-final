<?php

use App\Http\Controllers\Log\ActivityLogController;
use App\Http\Controllers\Log\LoginLogController;
use App\Http\Controllers\Log\OperationLogController;
use App\Http\Controllers\Setting\PermissionController;
use App\Http\Controllers\Setting\RoleController;
use App\Http\Controllers\Setting\UsersController;
use App\Http\Controllers\Setting\NepalicontentController;
use App\Http\Controllers\Test\TestController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix("settings")->group(function () {
    Route::prefix("users")->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('setting.users.index')->middleware('permission:settings-users-index');
        Route::get('/create', [UsersController::class, 'create'])->name('setting.users.create')->middleware('permission:settings-users-index');
        Route::post('/store', [UsersController::class, 'store'])->name('setting.users.store')->middleware('permission:settings-users-index');
        Route::get('/show/{id}', [UsersController::class, 'show'])->name('setting.users.show')->middleware('permission:settings-users-index');
        Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('setting.users.edit')->middleware('permission:settings-users-index');
        Route::put('/update/{id}', [UsersController::class, 'update'])->name('setting.users.update')->middleware('permission:settings-users-index');
        Route::get('/destroy/{id}', [UsersController::class, 'destroy'])->name('setting.users.destroy')->middleware('permission:settings-users-index');
    });
});

Route::middleware('auth')->prefix("setting")->group(function () {
    Route::prefix("permission")->group(function () {
        Route::get('/', [PermissionController::class, 'index'])->name('setting.permission.index')->middleware('permission:settings-permission-index');
        Route::get('/create', [PermissionController::class, 'create'])->name('setting.permission.create')->middleware('permission:settings-permission-index');
        Route::post('/store', [PermissionController::class, 'store'])->name('setting.permission.store')->middleware('permission:settings-permission-index');
        Route::get('/show/{id}', [PermissionController::class, 'show'])->name('setting.permission.show')->middleware('permission:settings-permission-index');
        Route::get('/edit/{id}', [PermissionController::class, 'edit'])->name('setting.permission.edit')->middleware('permission:settings-permission-index');
        Route::put('/update/{id}', [PermissionController::class, 'update'])->name('setting.permission.update')->middleware('permission:settings-permission-index');
        Route::get('/destroy/{id}', [PermissionController::class, 'destroy'])->name('setting.permission.destroy')->middleware('permission:settings-permission-index');
    });
});

Route::middleware('auth')->prefix("setting")->group(function () {
    Route::prefix("role")->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('setting.role.index')->middleware('permission:settings-role-index');
        Route::get('/create', [RoleController::class, 'create'])->name('setting.role.create');
        Route::post('/store', [RoleController::class, 'store'])->name('setting.role.store')->middleware('permission:settings-role-index');
        Route::get('/show/{id}', [RoleController::class, 'show'])->name('setting.role.show')->middleware('permission:settings-role-index');
        Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('setting.role.edit');
        Route::put('/update/{id}', [RoleController::class, 'update'])->name('setting.role.update')->middleware('permission:settings-role-index');
        Route::get('/destroy/{id}', [RoleController::class, 'destroy'])->name('setting.role.destroy')->middleware('permission:settings-role-index');
    });
});

Route::middleware('auth')->prefix("setting")->group(function () {
    Route::prefix("operation")->group(function () {
        Route::get('/', [OperationLogController::class, 'index'])->name('setting.operation.index'); //->middleware('permission:settings-role-index');
        Route::get('/create', [OperationLogController::class, 'create'])->name('setting.operation.create');
        Route::post('/store', [OperationLogController::class, 'store'])->name('setting.operation.store'); //->middleware('permission:settings-role-index');
        Route::get('/show/{id}', [OperationLogController::class, 'show'])->name('setting.operation.show'); //->middleware('permission:settings-role-index');
        Route::get('/edit/{id}', [OperationLogController::class, 'edit'])->name('setting.operation.edit');
        Route::put('/update/{id}', [OperationLogController::class, 'update'])->name('setting.operation.update'); //->middleware('permission:settings-role-index');
        Route::get('/destroy/{id}', [OperationLogController::class, 'destroy'])->name('setting.operation.destroy'); //->middleware('permission:settings-role-index');
        Route::get('/rollback/{operationNumber}', [OperationLogController::class, 'rollback'])->name('setting.operation.rollback'); //->middleware('permission:settings-role-index');

    });

    Route::prefix("login")->group(function () {
        Route::get('/', [LoginLogController::class, 'index'])->name('setting.login.index'); //->middleware('permission:settings-role-index');
        Route::get('/create', [LoginLogController::class, 'create'])->name('setting.login.create');
        Route::post('/store', [LoginLogController::class, 'store'])->name('setting.login.store'); //->middleware('permission:settings-role-index');
        Route::get('/show/{id}', [LoginLogController::class, 'show'])->name('setting.login.show'); //->middleware('permission:settings-role-index');
        Route::get('/edit/{id}', [LoginLogController::class, 'edit'])->name('setting.login.edit');
        Route::put('/update/{id}', [LoginLogController::class, 'update'])->name('setting.login.update'); //->middleware('permission:settings-role-index');
        Route::get('/destroy/{id}', [LoginLogController::class, 'destroy'])->name('setting.login.destroy'); //->middleware('permission:settings-role-index');

    });

    Route::prefix("activity")->group(function () {
        Route::get('/', [ActivityLogController::class, 'index'])->name('setting.activity.index'); //->middleware('permission:settings-role-index');
        Route::get('/create', [ActivityLogController::class, 'create'])->name('setting.activity.create');
        Route::post('/store', [ActivityLogController::class, 'store'])->name('setting.activity.store'); //->middleware('permission:settings-role-index');
        Route::get('/show/{id}', [ActivityLogController::class, 'show'])->name('setting.activity.show'); //->middleware('permission:settings-role-index');
        Route::get('/edit/{id}', [ActivityLogController::class, 'edit'])->name('setting.activity.edit');
        Route::put('/update/{id}', [ActivityLogController::class, 'update'])->name('setting.activity.update'); //->middleware('permission:settings-role-index');
        Route::get('/destroy/{id}', [ActivityLogController::class, 'destroy'])->name('setting.activity.destroy'); //->middleware('permission:settings-role-index');

    });

    Route::prefix("nepalicontent")->group(function () {
        Route::get('/', [NepalicontentController::class, 'index'])->name('setting.nepalicontent.index');
        Route::get('/create', [NepalicontentController::class, 'create'])->name('setting.nepalicontent.create');
        Route::post('/store', [NepalicontentController::class, 'store'])->name('setting.nepalicontent.store');
        Route::get('/show/{id}', [NepalicontentController::class, 'show'])->name('setting.nepalicontent.show');
        Route::get('/edit/{id}', [NepalicontentController::class, 'edit'])->name('setting.nepalicontent.edit');
        Route::put('/update/{id}', [NepalicontentController::class, 'update'])->name('setting.nepalicontent.update');
        Route::delete('/destroy/{id}', [NepalicontentController::class, 'destroy'])->name('setting.nepalicontent.destroy');
    });
});

Route::get('/test/data', [TestController::class, 'test'])->name('test.users.index');
