<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\AuthController\AuthController;
use App\Http\Controllers\Administrator\HomeController\HomeController;
use App\Http\Controllers\Administrator\UsersController\UsersController;
use App\Http\Controllers\Administrator\NotificationsController\NotificationsController;
use App\Http\Controllers\Administrator\ReportController\ReportController;
use App\Http\Controllers\Administrator\MapDataController\MapDataController;
use App\Http\Controllers\Administrator\MapController\MapController;

use App\Http\Controllers\HomeController\HomeController as UserHomeController;
use App\Http\Controllers\ComplaintController\ComplaintController as UserComplaintController;
use App\Http\Controllers\StatusController\StatusController;
use App\Http\Controllers\DiseaseMapController\DiseaseMapController;

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
Route::get('status', [StatusController::class,'index'])->name('status.user');
Route::get('keyId', [StatusController::class,'generateId'])->name('idKey.user');
Route::get('disease-map', [DiseaseMapController::class,'index'])->name('disease-map.user');


// Auth
Route::get('signin', [AuthController::class,'index'])->name('authenticate');
Route::get('signup', [AuthController::class,'register'])->name('register');

// Admin Page
Route::get('dashboard', [HomeController::class,'index'])->name('dashboard.admin');
Route::get('users', [UsersController::class,'index'])->name('user.admin');
Route::get('notifications', [NotificationsController::class,'index'])->name('notifications.admin');
Route::get('report', [ReportController::class,'index'])->name('report.admin');
Route::get('view-report', [ReportController::class,'view_report'])->name('view-report.admin');
Route::get('maps-data', [MapDataController::class,'index'])->name('DataMap.admin');
Route::get('maps', [MapController::class,'index'])->name('map.admin');


