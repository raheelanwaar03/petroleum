<?php

use App\Http\Controllers\admin\VehicalesController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('Add/Vehicale', [VehicalesController::class, 'add'])->name('Add.Vehicale');
