<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
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

Route::get('/',[PublicController::class, 'home'])->name('homePage');

Route::get('/create-ads',[PublicController::class, 'createAds'])->name('createAds');
Route::get('/TuttiGliAnnunci',[PublicController::class, 'showad'])->name('showad');
Route::get('/category/{category}',[PublicController::class, 'categoryAds'])->name('categoryAds');


Route::get('/dettaglio/{ad}',[PublicController::class, 'detailAd'])->name('detailAd');

Route::get('/zonarevisore',[RevisorController::class, 'zona_revisore'])->name('zona_revisore');

Route::patch('/accetta/annuncio/{ad}',[RevisorController::class, 'accettaad'])->name('revisor.accept_ad');

Route::patch('/rifiuta/annuncio/{ad}',[RevisorController::class, 'rifiutaad'])->name('revisor.reject_ad');

Route::get('/richiesta-revisore', [RevisorController::class, 'becomerevisor'])->name('becomeRevisor');

Route::get('/rendi-revisore/{user}', [RevisorController::class, 'makerevisor'])->name('makeRevisor');


// Ricerca annuncio
Route::get('/RicercaAnnuncio',[PublicController::class, 'searchAd'])->name('searchAd');

Route::get('/tornaindietro',[RevisorController::class, 'tornaindietro'])->name('tornaindietro');

Route::patch('/riporta-in-revisione/annuncio/{ad}',[RevisorController::class, 'returnToRevision'])->name('revisor.returnToRevision');