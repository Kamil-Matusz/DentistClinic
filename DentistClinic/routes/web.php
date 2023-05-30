<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReservationController;

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

Route::get("/services", [ServiceController::class, 'index'])->name('services.index');
Route::get("/services/implants", [ServiceController::class, 'implants'])->name('services.implants');
Route::get("/services/dentalSurgery", [ServiceController::class, 'dentalSurgery'])->name('services.dentalSurgery');
Route::get("/services/childrenDentistry", [ServiceController::class, 'childrenDentistry'])->name('services.childrenDentistry');
Route::get("/services/prevention", [ServiceController::class, 'prevention'])->name('services.prevention');

Route::middleware(['auth', 'verified'])->group(function() {
Route::get("users/list", [UserController::class, 'index'])->middleware('can:isAdmin');
Route::get("users/account", [UserController::class, 'account'])->name('users.account');
Route::get("/users/edit/{user}", [UserController::class, 'edit'])->name('users.edit')->middleware('can:isAdmin');
Route::post("/users/{user}", [UserController::class, 'update'])->name('users.update')->middleware('can:isAdmin');
Route::get("users/{id}/delete", [UserController::class, 'destroy'])->name('users.destroy')->middleware('can:isAdmin');

Route::get("/services/create", [ServiceController::class, 'create'])->name('services.create')->middleware('can:isAdmin');;
Route::post("/services", [ServiceController::class, 'store'])->name('services.store');
Route::get("/services/edit/{service}", [ServiceController::class, 'edit'])->name('services.edit')->middleware('can:isAdmin');
Route::post("/services/{service}", [ServiceController::class, 'update'])->name('services.update')->middleware('can:isAdmin');
Route::get("/services/{service}", [ServiceController::class, 'show'])->name('services.show');
Route::get("/services/{service}/delete", [ServiceController::class, 'destroy'])->name('services.destroy')->middleware('can:isAdmin');

Route::get("/reservations", [ReservationController::class, 'index'])->name('reservations.index');
Route::get("/reservations/create", [ReservationController::class, 'create'])->name('reservations.create');
Route::post("/reservations", [ReservationController::class, 'store'])->name('reservations.store');
Route::get('reservations/busyDates_KonradBieniasz', [ReservationController::class, 'busyDates_KonradBieniasz'])->name('reservations.busyDates_KonradBieniasz');
Route::get('reservations/busyDates_PawełGaweł', [ReservationController::class, 'busyDates_PawełGaweł'])->name('reservations.busyDates_PawełGaweł');
Route::get('reservations/busyDates_AgnieszkaJaros', [ReservationController::class, 'busyDates_AgnieszkaJaros'])->name('reservations.busyDates_AgnieszkaJaros');
Route::get('/reservations/yoursReservations', [ReservationController::class, 'yoursReservations'])->name('reservations.yoursReservations');
Route::get('/reservations/userReservations', [ReservationController::class, 'userReservations'])->name('reservations.userReservations');

Route::get('/adminpanel', [App\Http\Controllers\HomeController::class, 'adminpanel'])->name('adminpanel')->middleware('can:isAdmin');

});
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
