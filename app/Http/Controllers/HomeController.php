<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Inertia\Inertia;
use App\Models\Technology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $technologies = Technology::limit(5)->get();
        $categories = Category::limit(5)->get();
            
        return Inertia::render('Home', [
            'technology' => $technologies,
            'category' => $categories,
        ]);
    }
}
