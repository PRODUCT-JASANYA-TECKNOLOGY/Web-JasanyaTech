<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TechnologyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Halo cepat!';
});

Route::get('/technology', [TechnologyController::class, 'index']);