<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Benner;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use App\Models\Portofolio;
use App\Models\Technology;
use Illuminate\Http\Request;
use App\Helpers\BennerHelper;
use App\Helpers\SettingHelper;

class HomeController extends Controller
{
    public function index()
    {
        // Get DaTa
        $technologies = Technology::where('active', true)->limit(5)->get();
        $categories = Category::where('active', true)->limit(5)->get();
        $clients = Client::select('id', 'name', 'logo')->where('active', true)->get();
        $products = Product::where('active', true)->get();
        $portofolios = Portofolio::where('active', true)->Limit(6)->get();

        $contats = Contact::get();

        // Get Setting Helpers Hero Section
        $heroTitle = SettingHelper::getSetting('HERO_TITLE');
        $heroService = SettingHelper::getSetting('HERO_SERVICE');
        $heroText = SettingHelper::getSetting('HERO_TEXT');

        // Get Setting Helpers Product Section
        $productText = SettingHelper::getSetting('PRODUCT_TEXT');

        // Get Setting Helpers Portofolio Section
        $portofolioText = SettingHelper::getSetting('PORTOFOLIO_TEXT');

        // Get Setting Helpers About Section
        //Benner
        $aboutBenner = BennerHelper::getBennerImageUrl('BENNER_ABOUT'); 

        // Text
        $aboutTitle = SettingHelper::getSetting('ABOUT_TITLE');
        $aboutParagraf = SettingHelper::getSetting('ABOUT_PARAGRAF');
        $mision = SettingHelper::getSetting('MISION');
        $value = SettingHelper::getSetting('VALUE');

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
