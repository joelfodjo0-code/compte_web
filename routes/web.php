<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TableauController;
use App\Http\Controllers\SoldeController;
use App\Http\Controllers\CatalogueController;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/prix', function () { 
    return view('auth.prix'); })->name('prix');

Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');

Route::get('/client', [ClientController::class, 'index'])->name('client');


Route::get('/tableau', [TableauController::class, 'index'])->name('tableau');

Route::get('/solde', [SoldeController::class, 'index'])->name('solde');

Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue');

});





