<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TechnologyController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'technology' => 'Inertia + Vue + Laravel',
    ]);
});

Route::get('/test', function () {
    return 'Halo cepat!';
});

Route::get('/technology', [TechnologyController::class, 'index']);

Inertia::share('appName', config('app.name'));
