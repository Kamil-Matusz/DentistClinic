<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;

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

Route::get("users/list", [UserController::class, 'index'])->middleware('auth');
Route::get("users/{id}", [UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');

Route::get("/services", [ServiceController::class, 'index'])->name('services.index')->middleware('auth');;
Route::get("/services/create", [ServiceController::class, 'create'])->name('services.create')->middleware('auth');;
Route::post("/services", [ServiceController::class, 'store'])->name('services.store')->middleware('auth');
Route::get("/services/edit/{service}", [ServiceController::class, 'edit'])->name('services.edit')->middleware('auth');
Route::post("/services/{service}", [ServiceController::class, 'update'])->name('services.update')->middleware('auth');
Route::get("/services/{service}", [ServiceController::class, 'show'])->name('services.show');
Route::delete("/services/{service}", [ServiceController::class, 'destroy'])->name('services.destroy')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
