<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\AuthController\AuthController;
use App\Http\Controllers\Administrator\HomeController\HomeController;

use App\Http\Controllers\HomeController\HomeController as UserHomeController;
use App\Http\Controllers\ComplaintController\ComplaintController as UserComplaintController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// User Page
Route::get('/', [UserHomeController::class,'index'])->name('home.user');
Route::get('complaint', [UserComplaintController::class,'index'])->name('complaint.user');


// Auth
Route::get('signin', [AuthController::class,'index'])->name('authenticate');

// Admin Page
Route::get('dashboard', [HomeController::class,'index'])->name('dashboard.admin');


