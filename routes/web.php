<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\BuildingController;

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



Route::get('/building', [BuildingController::class, 'index'])->name('building.index');
Route::get('/building/create', [BuildingController::class, 'create'])->name('building.create');
Route::post('/building', [BuildingController::class, 'store'])->name('building.store');
Route::get('/building/{building}', [BuildingController::class, 'show'])->name('building.show');


Route::get('/apartment', [ApartmentController::class, 'index'])->name('apartment.index');
Route::get('/apartment/create', [ApartmentController::class, 'create'])->name('apartment.create');
Route::post('/apartment', [ApartmentController::class, 'store'])->name('apartment.store');
Route::get('/apartment/{apartment}', [ApartmentController::class, 'show'])->name('apartment.show');



Route::get('/', function () {
    return view('welcome');
});
