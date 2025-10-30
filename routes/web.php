<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExpositionController;


// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Algemene geschiedenis
Route::get('/geschiedenis', [ExpositionController::class, 'showHistory'])->name('geschiedenis');

// Historische figuren
Route::get('/figuren', [ExpositionController::class, 'showFigures'])->name('figuren');

// ⚔Gevechten / Slagen
Route::get('/gevechten', [ExpositionController::class, 'showBattles'])->name('gevechten');

// individual exposition pages
Route::get('/expositie/{id}', [ExpositionController::class, 'show'])->name('expositie.show');



require __DIR__.'/auth.php';

