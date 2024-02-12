<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Define routes for LunetteOptController

Route::get('my_admin/optique', [\App\Http\Controllers\LunetteOptController::class, 'index'])->name('lunetteopt.index');
Route::get('/optique/ajouter', [\App\Http\Controllers\LunetteOptController::class, 'create'])->name('lunetteopt.create');
Route::post('/optique/ajouter', [\App\Http\Controllers\LunetteOptController::class, 'store'])->name('lunetteopt.store');
Route::get('lunetteopt/{lunetteopt}/edit', [\App\Http\Controllers\LunetteOptController::class, 'edit'])->name('lunetteopt.edit');
Route::put('lunetteopt/{lunetteopt}', [\App\Http\Controllers\LunetteOptController::class, 'update'])->name('lunetteopt.update');
Route::delete('lunetteopt/{id}', [\App\Http\Controllers\LunetteOptController::class, 'destroy'])->name('lunetteopt.destroy');
Route::get('lunetteopt/search', [\App\Http\Controllers\LunetteOptController::class, 'search'])->name('lunetteopt.search');

// Define routes for LunetteSolController
Route::get('/lunettesol/create', [\App\Http\Controllers\LunetteSolController::class, 'create'])->name('lunettesol.create');
Route::post('/lunettesol', [\App\Http\Controllers\LunetteSolController::class, 'store'])->name('lunettesol.store');
Route::get('/lunettesol/{id}/edit', [\App\Http\Controllers\LunetteSolController::class, 'edit'])->name('lunettesol.edit');
Route::put('/lunettesol/{lunettesol}', [\App\Http\Controllers\LunetteSolController::class, 'update'])->name('lunettesol.update');
Route::delete('/lunettesol/{id}', [\App\Http\Controllers\LunetteSolController::class, 'destroy'])->name('lunettesol.destroy');
Route::get('my_admin/solaire', [\App\Http\Controllers\LunetteSolController::class, 'index'])->name('lunettesol.index');
Route::get('/lunettesol/search', [\App\Http\Controllers\LunetteSolController::class, 'search'])->name('lunettesol.search');

// Define routes for MontreController
Route::get('/montre/create', [\App\Http\Controllers\MontreController::class, 'create'])->name('montre.create');
Route::post('/montre', [\App\Http\Controllers\MontreController::class, 'store'])->name('montre.store');
Route::get('/montre/{id}/edit', [\App\Http\Controllers\MontreController::class, 'edit'])->name('montre.edit');
Route::put('/montre/{montre}', [\App\Http\Controllers\MontreController::class, 'update'])->name('montre.update');
Route::delete('/montre/{id}', [\App\Http\Controllers\MontreController::class, 'destroy'])->name('montre.destroy');
Route::get('my_admin/montre', [\App\Http\Controllers\MontreController::class, 'index'])->name('montre.index');
Route::get('/montre/search', [\App\Http\Controllers\MontreController::class, 'search'])->name('montre.search');

// Define routes for PrixController

Route::get('/my_admin/prix', [\App\Http\Controllers\PrixController::class, 'index']);
Route::post('/updateTable/{tableName}', [\App\Http\Controllers\PrixController::class, 'updateTable'])->name('updateTable');

