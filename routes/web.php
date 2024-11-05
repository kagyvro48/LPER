<?php

use App\Http\Controllers\Freelancing\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [HomeController::class, 'home'])->name('welcome');

Route::prefix('/')->name('lper.')->group(function () {
    Route::get('/post-job', [HomeController::class, 'postJob'])->name('post.job');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes pour le CRUD des utilisateurs
Route::prefix('admin/users')->name('admin.users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index'); // Liste des utilisateurs
    Route::get('/create', [UserController::class, 'create'])->name('create'); // Formulaire de création
    Route::post('/', [UserController::class, 'store'])->name('store'); // Stocker un nouvel utilisateur
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit'); // Formulaire d'édition
    Route::put('/{user}', [UserController::class, 'update'])->name('update'); // Mettre à jour un utilisateur
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy'); // Supprimer un utilisateur
});
require __DIR__.'/auth.php';
