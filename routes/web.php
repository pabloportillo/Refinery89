<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentUserController;

// Department Routes
Route::prefix('departments')->group(function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('departments.index');
    Route::get('create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('/', [DepartmentController::class, 'store'])->name('departments.store');
    Route::get('{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
    Route::put('{department}', [DepartmentController::class, 'update'])->name('departments.update');
    Route::delete('{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
});

// User Routes
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('create', [UserController::class, 'create'])->name('users.create');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('{user}', [UserController::class, 'destroy'])->name('users.delete');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // Routes for assigning/removing users to/from departments (consider POST or PUT actions)
    // Route::post('{user}/departments', [UserController::class, 'assignDepartment'])->name('users.assignDepartment');
    // Route::delete('{user}/departments/{department}', [UserController::class, 'removeDepartment'])->name('users.removeDepartment'); 
});

Route::prefix('department_users')->group(function () {
    Route::get('/', [DepartmentUserController::class, 'index'])->name('department_users.index');
    Route::get('create', [DepartmentUserController::class, 'create'])->name('department_users.create');
    Route::post('/', [DepartmentUserController::class, 'store'])->name('department_users.store');
    Route::get('{department_user}/edit', [DepartmentUserController::class, 'edit'])->name('department_users.edit');
    Route::put('{department_user}', [DepartmentUserController::class, 'update'])->name('department_users.update');
    Route::delete('/department_users/{department_user}', [DepartmentUserController::class, 'destroy'])->name('department_users.destroy');


    // Routes for assigning/removing users to/from departments (consider POST or PUT actions)
    // Route::post('{department_user}/departments', [DepartmentUserController::class, 'assignDepartment'])->name('department_users.assignDepartment');
    // Route::delete('{department_user}/departments/{department}', [DepartmentUserController::class, 'removeDepartment'])->name('department_users.removeDepartment'); 
});

