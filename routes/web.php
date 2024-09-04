<?php

use App\Http\Controllers\LivrosController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// ROTA RAIZ (ROOT)
Route::get('/', function () {
    return view('home');
})->name('home');

// ROTAS DE AUTENTICAÇÃO
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'auth'])->name('auth.authenticate');

// ROTAS PARA REGISTRO DE USUÁRIOS
Route::get('register', [LoginController::class, 'create'])->name('register.create');
Route::post('register', [LoginController::class, 'store'])->name('register.store');

// ROTAS PARA EXIBIÇÃO E GESTÃO DE USUÁRIOS
Route::middleware(['auth'])->group(function () {
    Route::get('users', [LoginController::class, 'index'])->name('users.index');
    Route::get('users/{id}', [LoginController::class, 'show'])->name('users.show');
    Route::get('users/{id}/edit', [LoginController::class, 'edit'])->name('users.edit');
    Route::put('users/{id}', [LoginController::class, 'update'])->name('users.update');
    Route::delete('users/{id}', [LoginController::class, 'destroy'])->name('users.destroy');
});

// ROTA PARA ESQUECI MINHA SENHA
Route::get('auth/lembrar-se', function() {
    return view('auth.forgotten');
})->name('auth.password.request');

// PROTEGENDO AS ROTAS DE LIVROS COM MIDDLEWARE
Route::middleware(['auth'])->group(function () {
    Route::resource('livros', LivrosController::class);
});

// LOGOUT
Route::post('logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');
