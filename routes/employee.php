<?php

//orginization dashboard

use App\Http\Controllers\Dashboard\EmployeeDashboardController;
use App\Models\Hr\Employee;
use App\Models\Hr\Leaveapplication;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/user/dashboard', [EmployeeDashboardController::class, 'dashboard'])->middleware(['auth'])->name('employee.dashboard');

Route::get('/user/projects', function () {
    return view('employee.projects.index');
})->name('employee.projects.index');

Route::get('/user/tasks', function () {
    return view('employee.tasks.index');
})->name('employee.tasks.index');

Route::get('/user/expenses', function () {
    return view('employee.expenses.index');
})->name('employee.expenses.index');

Route::get('/user/attandance', function () {
    $users = User::where('id', auth()->user()->id)->get();
    return view('employee.attandance.index', compact('users'));
})->name('employee.attandance.index');

Route::get('/user/leaves', function () {
    $data = Leaveapplication::where('employee_id', auth()->user()->employee->employee_id)->orderBy('created_at', 'desc')->get();
    return view('employee.leaves.ajax_index', compact('data'));
})->name('employee.leaves.index');



// Route::get('/', function () {
//     return view('welcome');
// });



