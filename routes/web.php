<?php

use App\Http\Controllers\CaseController;
use App\Http\Controllers\CellOccupationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PrisonerController;
use App\Http\Controllers\ProfileController;
use App\Models\CellOccupation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('prisoners', PrisonerController::class)
    ->only(['index', 'show'])
    ->middleware(['auth', 'verified']);
Route::resource('cases', CaseController::class)
    ->only(['index', 'show'])
    ->middleware(['auth', 'verified']);
Route::resource('locations', LocationController::class)
    ->only(['index', 'show'])
    ->middleware(['auth', 'verified']);
Route::resource('occupations', CellOccupationController::class)
    ->only(['index', 'show'])
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
