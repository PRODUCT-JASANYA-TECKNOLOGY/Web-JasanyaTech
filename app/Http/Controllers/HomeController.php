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
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];

        // Get DaTa
        $data ['technologies'] = Technology::where('active', true)->limit(5)->get();
        $data ['categories'] = Category::where('active', true)->limit(5)->get();
        $data ['clients'] = Client::select('id', 'name', 'logo')->where('active', true)->get();
        $data ['products'] = Product::where('active', true)->get();
        $data ['portofolios'] = Portofolio::where('active', true)->Limit(6)->get();

        $data ['contats'] = Contact::get();

        // Get Setting Helpers Hero Section
        $data ['heroTitle'] = SettingHelper::getSetting('HERO_TITLE');
        $data ['heroService'] = SettingHelper::getSetting('HERO_SERVICE');
        $data ['heroText'] = SettingHelper::getSetting('HERO_TEXT');

        // Get Setting Helpers Product Section
        $data ['productText'] = SettingHelper::getSetting('PRODUCT_TEXT');

        // Get Setting Helpers Portofolio Section
        $data ['portofolioText'] = SettingHelper::getSetting('PORTOFOLIO_TEXT');

        // Get Setting Helpers About Section
        //Benner
        $data ['aboutBenner'] = BennerHelper::getBennerImageUrl('BENNER_ABOUT'); 

        // Text
        $data ['aboutTitle'] = SettingHelper::getSetting('ABOUT_TITLE');
        $data ['aboutParagraf'] = SettingHelper::getSetting('ABOUT_PARAGRAF');
        $data ['mision'] = SettingHelper::getSetting('MISION');
        $data ['value'] = SettingHelper::getSetting('VALUE');

        //Get Setting Helper Service Section
        $data ['serviceTitle'] = SettingHelper::getSetting('SERVICE_TITLE');
        $data ['serviceText'] = SettingHelper::getSetting('SERVICE_TEXT');

        //Get Setting Helper Working Proses Section
        $data ['workingProsesTitle'] = SettingHelper::getSetting('WORKING_PROSES_TITLE');
        $data ['workingProsesText'] = SettingHelper::getSetting('WORKING__PROSES_TEXT');

        //get wa marketing
        $data ['waMarketing'] = SettingHelper::getSetting('WA_MARKETING');

        return view('homepage', $data);
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
