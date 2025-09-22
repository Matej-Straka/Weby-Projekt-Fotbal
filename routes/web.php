<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SeasonController;
//php
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

Route::get('/', [ArticleController::class, 'index']
)->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/seasons', [SeasonController::class, 'index'])->name('season.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/admin/article', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/admin/article/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/admin/article/{id}', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/admin/article/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
    Route::get('/admin/article', [ArticleController::class, 'list'])->name('article.list');
});

require __DIR__.'/auth.php';
