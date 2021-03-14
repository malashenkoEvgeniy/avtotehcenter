<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Model;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class ModelController extends BaseController
{
    protected $storePath = '/uploads/models/';
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $models = Model::orderBy('category_id')->paginate(10);
        return view('admin.models.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.models.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $req = request()->only('slug' );
        $req['category_id'] = $request->category_id;
        $req['slug'] = SlugService :: createSlug ( Model :: class, 'slug' , $request->title );

        if (request()->file('images') !== null) {
            $file = $this->storeFile(request()->file('images'), $this->storePath);
            $req['images'] = $file['path'];
        }

        $models = $this->storeWithTranslation(new Model(), $req,
            ['title'=>$request->title,
                'seo_title'=>$request->seo_title,
                'seo_keywords'=>$request->seo_keywords,
                'seo_description'=>$request->seo_description]);

        return redirect()->route('models.index')->with('success', 'Запись успешно создана');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $model = Model::find($id);
        $categories = Category::all();
        return view('admin.models.edit', compact('model', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
//        dd($request);

        $model = Model::find($id);
        if (request()->file('images') !== null) {
            $this->deleteFile($model->image);
            $file = $this->storeFile(request()->file('images'), $this->storePath);
            $model->images = $file['path'];
            $model->update(['images' => $model->images]);
        }
        $model->update(['category_id' => $request->category_id]);

        $model->translate()->update( ['title'=>$request->title,
            'seo_title'=>$request->seo_title,
            'seo_keywords'=>$request->seo_keywords,
            'seo_description'=>$request->seo_description]);
        return redirect()->route('models.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

        Model::destroy($id);
        return redirect()->route('models.index')->with('success', 'Категория удалена');
    }
}