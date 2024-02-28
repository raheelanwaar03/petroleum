<?php

use App\Http\Controllers\admin\BuyingPetrolRecored;
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
Route::get('/Edit/Vehicale/{id}', [VehicalesController::class, 'edit'])->name('Edit.Vehicale');
Route::post('/Update/Vehicale/{id}', [VehicalesController::class, 'update'])->name('Update.Vehicale');
Route::get('/Delete/Vehicale/{id}', [VehicalesController::class, 'delete'])->name('Delete.Vehicale');
// fuel record
Route::get('/Fuel',[FuelRecoredController::class,'index'])->name('All.Recored');
Route::post('/Store/Selling/Record',[FuelRecoredController::class,'store_selling'])->name('Store.Recored');
Route::get('/Edit/Selling/Record/{id}',[FuelRecoredController::class,'edit'])->name('Edit.Recored');
Route::post('/Update/Selling/Record/{id}',[FuelRecoredController::class,'update'])->name('Update.Recored');
Route::get('/Delete/Selling/Record/{id}',[FuelRecoredController::class,'delete'])->name('Delete.Recored');
// Users routes
Route::get('/All/Users',[UserMangementController::class,'all'])->name('All.Users');
Route::post('/Add/User',[UserMangementController::class,'add'])->name('Add.User');
// buying recored
Route::get('/Buying/Recored',[BuyingPetrolRecored::class,'index'])->name('Buying.Record');
Route::post('/Store/Buying/Recored',[BuyingPetrolRecored::class,'store'])->name('Store.Buying.Record');
Route::get('/Edit/Buying/Recored/{id}',[BuyingPetrolRecored::class,'edit'])->name('Edit.Buying.Record');
Route::post('/Update/Buying/Recored/{id}',[BuyingPetrolRecored::class,'update'])->name('Update.Buying.Record');
Route::get('/Delete/Buying/Recored/{id}',[BuyingPetrolRecored::class,'delete'])->name('Delete.Buying.Record');
