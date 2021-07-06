<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\NotaryController;
use App\Http\Controllers\PPATController;
use Illuminate\Support\Facades\Route;

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

// Home Route
Route::get('/', function () {
    return view('index');
});

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'auth.isAdmin'])->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
});

// Notary Routes
// Route::get('notary/search', [NotaryController::class, 'search'])->name('notary.search');
Route::resource('notary', NotaryController::class)->middleware('auth');

// PPAT Routes
Route::resource('ppat', PPATController::class)->middleware('auth');
