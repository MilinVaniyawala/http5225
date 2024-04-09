<?php

use app\Models\Wines;
use App\Http\Controllers\WinesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'wines/trash/{id}',
    [WinesController::class, 'trash']
)->name('wines.trash');

Route::get(
    'wines/trashed/',
    [WinesController::class, 'trashed']
)->name('wines.trashed');

Route::get(
    'wines/restore/{id}',
    [WinesController::class, 'trash']
)->name('wines.restore');

Route::resource('wines', WinesController::class);
