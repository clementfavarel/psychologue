<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/a-propos', function () {
    return view('a-propos');
})->name('a-propos');

Route::get('/consultations', function () {
    return view('consultations');
})->name('consultations');

Route::get('/publications', function () {
    return view('publications');
})->name('publications');

Route::get('/mentions', function () {
    return view('mentions');
})->name('mentions');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
