<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
// Auth Configuration
Route::get('/', [AuthController::class, 'index']);
Route::post('/auth', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard Configuration
Route::get('/dsb_admin', [DashboardController::class, 'dsb_admin']);
Route::get('/profile', [DashboardController::class,'profile']);
Route::get('/datamaster', [DashboardController::class,'master']);
