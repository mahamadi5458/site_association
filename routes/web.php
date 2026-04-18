<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashbord');
});

Route::resource('contact', ContactController::class);