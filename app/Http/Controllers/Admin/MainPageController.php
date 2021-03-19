<?php

namespace App\Http\Controllers\Admin;

use App\Models\MainPage;
use App\Models\SliderImages;
use App\Models\TypeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainPageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $page = MainPage::first();
        $sliders = SliderImages::orderby('is_video', 'desc')->get();

        return view('admin.main-page.index', compact('page', 'sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = MainPage::find($id);
        return view('admin.main-page.edit', compact('page'));
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
        $request->validate([
            'title' => 'required',
        ]);

        $main_page = MainPage::find($id);


        $main_page->translate()->update( [
            'title'=>$request->title,
            'body'=>$request->body,
            'seo_title'=>$request->seo_title,
            'seo_keywords'=>$request->seo_keywords,
            'seo_description'=>$request->seo_description]);
        return redirect()->route('main-page.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Model::destroy($id);
        return redirect()->route('home')->with('success', 'Категория удалена');
    }
}
