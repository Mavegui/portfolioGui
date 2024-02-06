<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\InteressesController;

Route::get('/', [SiteController::class, 'index'])->name('site.index');

/* Rota contato */
Route::get('/contato', [ContatoController::class, 'contato'])->name('mail.contato');
Route::post('/contato', [ContatoController::class, 'store'])->name('mail.store');

/* Rota portofólio */
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('site.portfolio');

/* Rota experiencia */
Route::get('/experiencia', [ExperienciaController::class, 'experiencia'])->name('site.experiencia');

/* Rota interesses */
Route::get('/interesses', [InteressesController::class, 'interesses'])->name('site.interesses');