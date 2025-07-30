<?php

namespace App\Http\Controllers;

use App\Helpers\SettingHelper;
use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use Inertia\Inertia;
use App\Models\Technology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        Inertia::share('HERO_TITLE', SettingHelper::getSetting('HERO_TITLE'));
        $technologies = Technology::limit(5)->get();
        $categories = Category::limit(5)->get();
        $clients = Client::select('id', 'name', 'logo', 'desc')->get();
        foreach ($clients as $client) {
            $client->logo_url = asset('storage/' . $client->logo);
        }
        $contats = Contact::get();
            
        return Inertia::render('Home', [
            'technology' => $technologies,
            'category' => $categories,
            'client' => $clients,
            'contact' => $contats,
        ]);
    }

    public function createContact(Request $request)
    {
        Contact::create(
            $request->validate([
                'name' => ['required', 'max:128'],
                'email' => ['required', 'max:128', 'email'],
                'need' => ['required', 'max:1000'],
                'massage' => ['required', 'max:1000'],
            ])
        );

        return to_route('contact.index');
    }
}
