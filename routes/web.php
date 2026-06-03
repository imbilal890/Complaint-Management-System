<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 🟢 USER SIDE
Route::get('/complaint', [ComplaintController::class, 'create']);
Route::post('/complaint/store', [ComplaintController::class, 'store']);

Route::get('/track', [ComplaintController::class, 'trackPage']);
Route::post('/track', [ComplaintController::class, 'track']);

// 🟢 ADMIN DASHBOARD
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

// 🟢 ADMIN STATUS CONTROL (CMS FEATURE)
Route::get('/admin/pending/{id}', [AdminController::class, 'setPending']);
Route::get('/admin/progress/{id}', [AdminController::class, 'setProgress']);
Route::get('/admin/resolved/{id}', [AdminController::class, 'setResolved']);