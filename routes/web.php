<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\AccessoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can regperilister web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('accessory', AccessoryController::class);
Route::resource('areas', AreaController::class);
Route::resource('equipment', EquipmentController::class);
Route::resource('order', OrderController::class);
Route::resource('petition', PetitionController::class);
Route::resource('perfil', ProfileController::class);
Route::get('/generar-pdf', [PDFController::class, 'generarPDF'])->name('generar.pdf');
