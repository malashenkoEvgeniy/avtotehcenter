<?php

namespace App\Http\Controllers\Admin;

use App\Models\SliderImages;
use Illuminate\Http\Request;

class SliderImagesController extends BaseController
{

    protected $storePath = '/uploads/sliders/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = request()->only('url');

        if (request()->file('url')->extension() == 'mp4'){
            $req['is_video'] = 1;
        }else{
            $req['is_video'] = 0;
        }

        $file = $this->storeFile(request()->file('url'), $this->storePath);
        $req['url'] = $file['path'];

        $img = SliderImages::create($req);

        return redirect(route('home'))->with('success', 'Запись успешно создана');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        SliderImages::destroy($id);
        return redirect()->route('home')->with('success', 'Категория удалена');
    }
}
