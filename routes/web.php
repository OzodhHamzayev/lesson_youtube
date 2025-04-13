<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('page', [PageController::class, 'index'])->name('page');
Route::get('service', [ServiceController::class, 'index'])->name('service');
Route::get('login', [AdminController::class, 'pageLogin'])->name('login');