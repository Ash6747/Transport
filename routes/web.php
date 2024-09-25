<?php

use App\Http\Controllers\Frontend\Admin\AdminController ;
use App\Http\Controllers\Frontend\Admin\DriversController;
use App\Http\Controllers\Frontend\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Admin;

Route::get('/home', function () {
  return view('pages.home');
});
Route::any('/test', function () {
  $admin = Admin::all();
  echo "<pre>";
  print_r($admin->toArray());
});

//Admin Home controller
Route::get('/', [HomeController::class, 'index']);

// User(Student) Controller
Route::get('/login', [UserController::class , 'index']);
Route::post('/login', [UserController::class , 'login']);

Route::get('/register', [AdminController::class, 'index']);
Route::post('/register', [AdminController::class, 'register']);
// Redirecting Url
Route::get('/register/view', [AdminController::class, 'view']);

// Route::get('/register', [UserController::class, 'register_page']);
// Route::post('/register', [UserController::class, 'register']);

//Admin Driver Controller
Route::get('/drivers', [DriversController::class, 'index'])->name('driver.table');

Route::get('/drivers/trash', [DriversController::class, 'trash'])->name('driver.trash');
Route::get('/drivers/restore/{id}', [DriversController::class, 'restore'])->name('driver.restore');
Route::get('/drivers/force-delete/{id}', [DriversController::class, 'forcefullyDelete'])->name('driver.hardDelete');

Route::get('/drivers/status/{id}', [DriversController::class, 'active'])->name('driver.status');
Route::get('/drivers/delete/{id}', [DriversController::class, 'destroy'])->name('driver.delete');

Route::get('/drivers/create', [DriversController::class, 'create'])->name('driver.create');
Route::post('/drivers/create', [DriversController::class, 'store'])->name('driver.store');

Route::get('/drivers/update/{id}', [DriversController::class, 'edit'])->name('driver.edit');
Route::post('/drivers/update/{id}', [DriversController::class, 'update'])->name('driver.update');

