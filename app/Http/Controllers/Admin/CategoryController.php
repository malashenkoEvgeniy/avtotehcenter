<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\TypeModel;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    protected $storePath = '/uploads/category/';
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {

        $categories = Category::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.categories.create');
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
        $req['slug'] = SlugService :: createSlug ( Category :: class, 'slug' , $request->title );

        if (request()->file('images') !== null) {
            $file = $this->storeFile(request()->file('images'), $this->storePath);
            $req['images'] = $file['path'];
        }

        $category = $this->storeWithTranslation(new Category(), $req,
            ['title'=>$request->title,
             'body'=>$request->body,
             'seo_title'=>$request->seo_title,
             'seo_keywords'=>$request->seo_keywords,
             'seo_description'=>$request->seo_description,

                ]);

        return redirect()->route('categories.index')->with('success', 'Запись успешно создана');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
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
        $req = request()->except('title', 'seo_title', 'seo_keywords', 'seo_description');
        $category = Category::find($id);
        if (request()->file('images') !== null) {
            $this->deleteFile($category->image);
            $file = $this->storeFile(request()->file('images'), $this->storePath);
            $category->images = $file['path'];
            $category->update(['images' => $category->images]);
        }

        $category->translate()->update( ['title'=>$request->title,
            'body'=>$request->body,
            'seo_title'=>$request->seo_title,
            'seo_keywords'=>$request->seo_keywords,
            'seo_description'=>$request->seo_description,

        ]);
        return redirect()->route('categories.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index')->with('success', 'Категория удалена');
    }
}
