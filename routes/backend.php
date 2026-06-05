<?php

use App\Http\Controllers\backend\dashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard',[dashboardController::class,'dashboard'])->name('dashboard');





