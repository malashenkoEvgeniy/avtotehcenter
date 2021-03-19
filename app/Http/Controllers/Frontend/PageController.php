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
            if($slug=="spectehnika") {
                return redirect(route('special_equipment', ['slug'=>$slug]));
            }

            $page = Page::where('slug', $slug)->first();
            if($page==null) {
                return redirect(route('special_equipment', ['slug'=>$slug]));
            }
            $categories = Category::all();
            $seo_data = [
                'title' => $page->translate()->seo_title,
                'keywords'=> $page->translate()->seo_keywords,
                'description'=>$page->translate()->seo_description];
            $certificates = Certificate::all();

            if($page->parent_id !== null){
                $parent = Page::where('id', $page->parent_id)->first();
                $breadcrumbs = [
                    [
                        'link' =>$parent->slug,
                        'name'=>$parent->translate()->title,
                        'last'=>0
                    ],
                    [
                    'link' =>$page->slug,
                    'name'=>$page->translate()->title,
                    'last'=>1
                        ]
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
