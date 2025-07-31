<?php

namespace App\Http\Controllers;

use App\Helpers\SettingHelper;
use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Portofolio;
use App\Models\Product;
use Inertia\Inertia;
use App\Models\Technology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get DaTa
        $technologies = Technology::where('status_id', 1)->limit(5)->get();
        $categories = Category::where('status_id', 1)->limit(5)->get();
        $clients = Client::select('id', 'name', 'logo')->where('status_id', 1)->get();
        $products = Product::where('status_id', 1)->get();
        $portofolios = Portofolio::where('status_id', 1)->Limit(6)->get();

        $contats = Contact::get();

        // Get Setting Helpers Hero Section
        $heroTitle = SettingHelper::getSetting('HERO_TITLE');
        $heroService = SettingHelper::getSetting('HERO_SERVICE');
        $heroText = SettingHelper::getSetting('HERO_TEXT');

        // Get Setting Helpers Product
        $productText = SettingHelper::getSetting('PRODUCT_TEXT');

        // Get Setting Helpers Portofolio
        $portofolioText = SettingHelper::getSetting('PORTOFOLIO_TEXT');

        return view('homepage', compact('heroTitle', 'heroService', 'heroText', 'productText', 'portofolioText'));
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
