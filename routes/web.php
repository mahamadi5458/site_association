<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ApropoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartenaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashbord');
});

Route::resource('contact', ContactController::class);
Route::resource('apropos',ApropoController::class);
Route::resource('partenaires', PartenaireController::class);
Route::resource('acticites', ActiviteController::class);
Route::resource('accueils', AccueilController::class);

Route::post('/partenariat', [PartenaireController::class, 'sendForm'])->name('partenariat.send');