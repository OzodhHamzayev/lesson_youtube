<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about/employee/show/{employees:slug}', [AboutController::class, 'employeeShow'])->name('about.employee.show');
Route::get('about/service/show/{id}', [AboutController::class, 'serviceShow'])->name('about.service.show');




Route::resource('service', ServiceController::class);
Route::resource('about', AboutController::class);
Route::resource('contact', ContactController::class);
Route::resource('page', PageController::class);

















Route::get('login', [AdminController::class, 'login'])
    ->name('login');

Route::post('admin/login', [AdminController::class, 'authLogin'])
    ->name('admin.login');