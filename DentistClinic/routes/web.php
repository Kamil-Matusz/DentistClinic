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

Route::middleware(['auth', 'verified'])->group(function() {
Route::get("users/list", [UserController::class, 'index'])->middleware('can:isAdmin');
Route::get("users/{id}/delete", [UserController::class, 'destroy'])->name('users.destroy')->middleware('can:isAdmin');

Route::get("/services", [ServiceController::class, 'index'])->name('services.index')->middleware('auth');;
Route::get("/services/create", [ServiceController::class, 'create'])->name('services.create')->middleware('can:isAdmin');;
Route::post("/services", [ServiceController::class, 'store'])->name('services.store');
Route::get("/services/edit/{service}", [ServiceController::class, 'edit'])->name('services.edit')->middleware('can:isAdmin');
Route::post("/services/{service}", [ServiceController::class, 'update'])->name('services.update')->middleware('can:isAdmin');
Route::get("/services/{service}", [ServiceController::class, 'show'])->name('services.show');
Route::get("/services/{service}/delete", [ServiceController::class, 'destroy'])->name('services.destroy')->middleware('can:isAdmin');
});
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
