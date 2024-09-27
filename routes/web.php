<?php

use App\Http\Controllers\Frontend\Admin\AdminController ;
use App\Http\Controllers\Frontend\Admin\DriversController;
use App\Http\Controllers\Frontend\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Admin;
use Illuminate\Routing\Controller;

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
Route::prefix('drivers')->controller(DriversController::class)->group(function () {
  Route::get('/', 'index')->name('driver.table');
  
  Route::get('/trash', 'trash')->name('driver.trash');
  Route::get('/restore/{id}', 'restore')->name('driver.restore');
  Route::get('/force-delete/{id}', 'forcefullyDelete')->name('driver.hardDelete');
  
  Route::get('/status/{id}', 'active')->name('driver.status');
  Route::get('/delete/{id}', 'destroy')->name('driver.delete');
  
  Route::get('/create', 'create')->name('driver.create');
  Route::post('/create', 'store')->name('driver.store');
  
  Route::get('/update/{id}', 'edit')->name('driver.edit');
  Route::post('/update/{id}', 'update')->name('driver.update');
});

