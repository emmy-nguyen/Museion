<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtworkController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'render'])->name('home');
Route::get('/artworks', [ArtworkController::class, 'all'])->name('artworks');
Route::get('/artworks/{id}', [ArtworkController::class, 'find'])->name('artworks.detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/artworks/create', [ArtworkController::class, 'all'])->name('artworks.create');

});


require __DIR__.'/auth.php';
