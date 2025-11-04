<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/products',
    [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('produtos.index');

// chama o controlador, que por sua vez executa a action (função), ex: index ou create
Route::middleware('auth')
    ->prefix('admin')
    ->group(function () {
    Route::get('/users/create',
        [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('users.create');
    Route::get('/users/{user}',
        [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit',
        [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}',
        [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');
    Route::get('/users',
        [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
    Route::post('/users/create',
        [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('users.store');
    Route::delete('/users/{user}/destroy',
        [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy')
        ->middleware(\App\Http\Middleware\CheckIfIsAdmin::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
