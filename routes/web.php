<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
})->name('home');

Route::get('/voitures', [VoitureController::class, 'index'])->name('voiture.index');
Route::get('/voitures/ajouter', [VoitureController::class, 'create'])->name('voiture.create');
Route::post('/voitures/ajouter', [VoitureController::class, 'store'])->name('voiture.store');
Route::get('/voitures/{voiture}', [VoitureController::class, 'show'])->name('voiture.show');
Route::get('/voitures/{voiture}/modifier', [VoitureController::class, 'edit'])->name('voiture.edit');
Route::post('/voitures/{voiture}/modifier', [VoitureController::class, 'update'])->name('voiture.update');
Route::get('/voitures/{voiture}/supprimer', [VoitureController::class, 'destroy'])->name('voiture.destroy');

Route::get('/categories', [CategorieController::class, 'index'])->name('categorie.index');

Route::get('/categories/ajouter', [CategorieController::class, 'create'])->name('categorie.create');
Route::post('/categories/ajouter', [CategorieController::class, 'store'])->name('categorie.store');
Route::get('/categories/{categorie}', [CategorieController::class, 'show'])->name('categorie.show');
Route::get('/categories/{categorie}/modifier', [CategorieController::class, 'edit'])->name('categorie.edit');
Route::post('/categories/{categorie}/modifier', [CategorieController::class, 'update'])->name('categorie.update');
Route::get('/categories/{categorie}/supprimer', [CategorieController::class, 'destroy'])->name('categorie.destroy');
