<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('wines/trash/{id}', [WineController::class, 'trash'])->name('wines.trash')->middleware(['auth', 'verified']);
Route::get('wines/trashed/', [WineController::class, 'trashed'])->name('wines.trashed')->middleware(['auth', 'verified']);
Route::get('wines/restore/{id}', [WineController::class, 'restore'])->name('wines.restore')->middleware(['auth', 'verified']);

Route::resource('wines', WineController::class);

Route::get('wines/create', [WineController::class, 'create'])->name('wines.create')->middleware(['auth', 'verified']);
Route::get('wines/edit', [WineController::class, 'edit'])->name('wines.edit')->middleware(['auth', 'verified']);
Route::get('wines/show', [WineController::class, 'show'])->name('wines.show')->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
