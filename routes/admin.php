<?php

use App\Http\Controllers\admin\FuelRecoredController;
use App\Http\Controllers\admin\UserMangementController;
use App\Http\Controllers\admin\VehicalesController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// vehicales recored
Route::get('/Vehicale', [VehicalesController::class, 'index'])->name('All.Vehicale');
Route::post('/Store/Vehicale', [VehicalesController::class, 'store'])->name('Store.Vehicale');
// fuel record
Route::get('/Fuel',[FuelRecoredController::class,'index'])->name('All.Recored');
Route::post('/Store/Selling/Record',[FuelRecoredController::class,'store_selling'])->name('Store.Recored');
// Users routes
Route::get('/All/Users',[UserMangementController::class,'all'])->name('All.Users');
Route::post('/Add/User',[UserMangementController::class,'add'])->name('Add.User');
