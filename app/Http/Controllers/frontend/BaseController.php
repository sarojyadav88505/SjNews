<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct() {
        $categories = Category::all();

        //ads
        $headerAd = Ad::orderBy('created_at','desc')->where('ad_type','header')->first();
        // $sideAds = Ad::where('ad_type','side')->where('status','active')->get();
        $sideAds = Ad::where('ad_type','side')->get();
        $sectionAds = Ad::where('ad_type','section')->get();
        // $sectionAd = Ad::orderBy('created_at','desc')->where('ad_type','section')->first();


        $company = Company::first();
        // Technology
        $technologies = Category::where('slug','technology')->first();
        $techNews = $technologies->article;

        // Sports
        $sports = Category::where('slug','sports')->first();
        $sportNews = $sports->article;

        // Politics
        $politics = Category::where('slug','politics')->first();
        $politicsNews = $politics->article;

        // society
        $society = Category::where('slug','society')->first();
        $societyNews = $society->article;

        View::share([
            'categories' => $categories,
            'technologies' => $techNews,
            'sports' => $sportNews,
            'politics' => $politicsNews,
            'society' => $societyNews,
            'company'=>$company,
            'headerAd'=>$headerAd,
            'sideAds' => $sideAds,
            'sectionAds'=>$sectionAds,
        ]);
    }
}
