<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [UserController::class, 'index']);

Route::get('home', [CustomerController::class, 'index'])->name('home');
Route::post('formstore', [CustomerController::class, 'store'])->name('formstore');


Route::get('room/manager', [ManagerController::class, 'index'])->name('room.manager');
Route::get('room/show-manager', [ManagerController::class, 'show'])->name('room.show-manager');
Route::post('room/manager', [ManagerController::class, 'store'])->name('room.store');


Route::get('room/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('room/show-dashboard', [DashboardController::class, 'show'])->name('room.show-dashboard');
Route::post('room/dashboard', [DashboardController::class, 'store'])->name('dashboard.store');
