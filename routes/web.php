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


Route::resource('my_admin/opt', \App\Http\Controllers\LunetteOptController::class);
Route::get('/optique/ajouter', [\App\Http\Controllers\LunetteOptController::class, 'create'])->name('lunetteopt.create');
Route::post('/optique/ajouter', [\App\Http\Controllers\LunetteOptController::class, 'store'])->name('lunetteopt.store');
Route::get('lunetteopt/{lunetteopt}/edit', [\App\Http\Controllers\LunetteOptController::class, 'edit'])->name('lunetteopt.edit');
// Update LunetteOpt
Route::put('lunetteopt/{lunetteopt}', [\App\Http\Controllers\LunetteOptController::class, 'update'])->name('lunetteopt.update');
// Delete LunetteOpt
Route::delete('lunetteopt/{lunetteopt}', [\App\Http\Controllers\LunetteOptController::class, 'destroy'])->name('lunetteopt.destroy');