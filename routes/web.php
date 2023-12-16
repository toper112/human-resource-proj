<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//home&base
Route::get('/', [SiteController::class, 'home'])->name('home');

//employees
Route::get      ('/employees', [EmployeeController::class, 'index'])->name('employees');
Route::get      ('/employees/create', [EmployeeController::class, 'create']);
Route::post     ('/employees/store', [EmployeeController::class, 'store']);
Route::get      ('/employees/{employee}', [EmployeeController::class, 'edit']);
Route::post     ('/employees/{employee}', [EmployeeController::class, 'update']);
Route::delete   ('/employees/delete/{employee}', [EmployeeController::class, 'delete']);

//tasks
Route::get      ('/tasks', [TaskController::class, 'index'])->name('tasks');
Route::get      ('/tasks/create', [TaskController::class, 'create']);
Route::post     ('/tasks/store', [TaskController::class, 'store']);
Route::get      ('/tasks/{task}', [TaskController::class, 'edit']); 
Route::post     ('tasks/{task}', [TaskController::class, 'update']);
Route::delete   ('tasks/delete/{task}', [TaskController::class, 'delete']);


//salary
Route::get      ('/salaries', [SalaryController::class, 'index'])->name('salaries');
Route::get      ('/salaries/create', [SalaryController::class, 'create']);
Route::post     ('/salaries/store', [SalaryController::class, 'store']);
Route::get      ('/salaries/{salary}', [SalaryController::class, 'edit']);
Route::put      ('/salaries/{salary}', [SalaryController::class, 'update']);
Route::delete   ('/salaries/delete/{salary}', [SalaryController::class, 'delete']);



