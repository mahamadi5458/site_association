<?php

use App\Http\Controllers\ApropoController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashbord');
});

Route::resource('contact', ContactController::class);
Route::resource('apropos',ApropoController::class);