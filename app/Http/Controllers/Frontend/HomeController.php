<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\MainPage;
use App\Models\SliderImages;
use Lang;

class HomeController extends BaseController
{

    public function index()
    {
        $page = MainPage::first();
        $categories = Category::with('type_model')->get();
        $slider = SliderImages::all();
        $seo_data = [
            'title' => $page->translate()->seo_title,
            'keywords'=> $page->translate()->seo_keywords,
            'description'=>$page->translate()->seo_description
        ];
        return view('front.home', compact('page', 'categories', 'slider', 'seo_data'));
    }
}
