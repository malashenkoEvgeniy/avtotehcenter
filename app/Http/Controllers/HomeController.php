<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FormRequest;
use App\Models\MainPage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = MainPage::first();
        return view('admin.main-page.index', compact('page', 'newRequests'));
    }
}
