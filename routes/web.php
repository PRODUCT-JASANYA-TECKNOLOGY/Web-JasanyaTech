<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TechnologyController;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index']);

Route::get('/test', function () {
    return 'Halo cepat!';
});

Inertia::share('appName', config('app.name'));
