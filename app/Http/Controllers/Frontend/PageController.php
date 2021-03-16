<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Category;
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
////        dd(Page::onMainPage()->get());
//        $catalogPages = Page::onMainPage()->paginate(4);
//
//        $other_page = Page::all();
//        $slider = SliderImage::orderby('is_video', 'desc')->get();
//        dd('xd') ;

        return view('frontend.home', compact('page', 'seo', 'catalogPages', 'slider', 'other_page' ));
    }



    public function show($slug)
    {
            $page = Page::where('slug', $slug)->firstOrFail();
            $categories = Category::all();
            $seo_data = [
                'title' => $page->translate()->seo_title,
                'keywords'=> $page->translate()->seo_keywords,
                'description'=>$page->translate()->seo_description];

            $breadcrumbs = (object) [
                'current' => strip_tags($page->translate()->title),
//                'parent' => $this->findParents($page),
            ];

        return view('front.page', compact('page', 'categories', 'seo_data', 'breadcrumbs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
