<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::all();
            return Inertia::render('technology/Index', [
        'technology' => $technologies,
        ]);
    }
}
