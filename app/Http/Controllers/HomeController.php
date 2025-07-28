<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use Inertia\Inertia;
use App\Models\Technology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $technologies = Technology::limit(5)->get();
        $categories = Category::limit(5)->get();
        $clients = Client::select('id', 'name', 'logo', 'desc')->get();
        foreach ($clients as $client) {
            $client->logo_url = asset('storage/' . $client->logo);
        }
            
        return Inertia::render('Home', [
            'technology' => $technologies,
            'category' => $categories,
            'client' => $clients,
        ]);
    }
}
