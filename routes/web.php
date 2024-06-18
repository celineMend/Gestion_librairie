<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});

// Route pour les livres

Route::get('/livres', [LivreController::class, 'index'])->name('livres.index');
Route::get('/livres/ajouter',[LivreController::class,'ajouter'])->name('livres.ajouter');
Route::post('/livres/ajouter_traitement',[LivreController::class,'ajouter_traitement'])->name('livres.ajouter_traitement');
Route::get('/livres/{id}modifier', [LivreController::class, 'modifier'])->name('livres.modifier');
Route::post('/livres/{id}sauvegarder', [LivreController::class, 'sauvegarder'])->name('livres.sauvegarder');
Route::delete('/supprimer/{id}', [LivreController::class, 'supprimer'])->name('livres.supprimer');
Route::get('/livres/{id}', [LivreController::class, 'afficher'])->name('livres.detail');
Route::post('/livres/{id}sauvegarder', [LivreController::class, 'sauvegarder'])->name('livres.sauvegarder');
Route::delete('/livres/supprimer/{id}', [LivreController::class, 'supprimer'])->name('livres.supprimer');
Route::get('/livres/{id}', [LivreController::class, 'afficher'])->name('livres.detail');

//Route pour les catégories

Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
Route::get('/categories/partager', [CategorieController::class, 'partager'])->name('categories.partager');
Route::post('/categories/sauvegarder', [CategorieController::class, 'sauvegarder'])->name('categories.sauvegarder');
Route::get('/categories/{id}/modifier', [CategorieController::class, 'modifier'])->name('categories.modifier');
Route::post('/categories/{id}', [CategorieController::class, 'sauvegarde_modification'])->name('categories.sauvegarde_modification');
Route::delete('/categories/supprimer/{id}', [CategorieController::class, 'supprimer'])->name('categories.supprimer');

