<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\AccessoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
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
Route::resource('equipment', EquipmentController::class);

Route::resource('order', OrderController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('petition', PetitionController::class);
Route::resource('accessory', AccessoryController::class);
Route::resource('areas', AreaController::class);
