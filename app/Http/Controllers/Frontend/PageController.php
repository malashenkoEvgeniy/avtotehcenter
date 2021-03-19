<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Category;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\MainPage;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = MainPage::first();
        $seo = (object) [
            'title' => $page->translate()->seo_title,
            'description' => $page->translate()->seo_description,
            'keywords' => $page->translate()->seo_keywords,
        ];
        return view('frontend.home', compact('page', 'seo', 'catalogPages', 'slider', 'other_page' ));
    }



    public function show($slug)
    {
            $page = Page::where('slug', $slug)->first();
            $categories = Category::all();
            $seo_data = [
                'title' => $page->translate()->seo_title,
                'keywords'=> $page->translate()->seo_keywords,
                'description'=>$page->translate()->seo_description];
            $certificates = Certificate::all();

            if($page->parent_id !== null){
                $breadcrumbs = [
                    Page::where('id', $page->parent_id)->first()->translate()->title,
                    $page->translate()->title,
                ];
            } else {
                $breadcrumbs = [
                    [
                        'link' =>$page->slug,
                        'name'=>$page->translate()->title,
                        'last'=>1
                    ]

                ];
            }


        return view('front.page', compact('page', 'categories', 'seo_data', 'breadcrumbs', 'certificates'));
    }


}
