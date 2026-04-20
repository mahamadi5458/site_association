<?php

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