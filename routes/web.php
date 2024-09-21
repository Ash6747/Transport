<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DriversController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Admin;

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::get('/home', function () {
  return view('pages.home');
});
Route::any('/test', function () {
  $admin = Admin::all();
  echo "<pre>";
  print_r($admin->toArray());
});

Route::get('/login', [UserController::class , 'index']);
Route::post('/login', [UserController::class , 'login']);

Route::get('/register', [AdminController::class, 'index']);
Route::post('/register', [AdminController::class, 'register']);
// Redirecting Url
Route::get('/register/view', [AdminController::class, 'view']);

// Route::get('/register', [UserController::class, 'register_page']);
// Route::post('/register', [UserController::class, 'register']);

// Driver
Route::get('/drivers', [DriversController::class, 'index'])->name('driver.table');
Route::get('/drivers/create', [DriversController::class, 'create'])->name('driver.create');
Route::post('/drivers', [DriversController::class, 'store']);
