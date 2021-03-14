<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormRequest;
use App\Models\MainPage;
use App\Models\SliderImages;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = MainPage::first();
        $sliders = SliderImages::orderby('is_video', 'desc')->get();
        return view('admin.main-page.index', compact('page', 'sliders'));
    }
}
