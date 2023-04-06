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



Route::get('/category/{category}',[PublicController::class, 'categoryAds'])->name('categoryAds');


Route::get('/dettaglio/{ad}',[PublicController::class, 'detailAd'])->name('detailAd');

Route::get('/lavoraconnoi',[PublicController::class, 'lavoraConnoi'])->name('lavoraConnoi');

Route::get('/zonarevisore',[RevisorController::class, 'zona_revisore'])->name('zona_revisore');
