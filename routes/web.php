<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('homepage');
});
Route::get('/about', function(){
    return Inertia::render('about');
});
