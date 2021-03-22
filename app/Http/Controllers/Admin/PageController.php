<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use App\Models\Page;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    protected $storePath = '/uploads/pages/';
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {

        $pages = Page::paginate(10);
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        return view('admin.page.create');
    }

    public function requestModelDate(Request $request)
    {
        return Model::where('category_id', $request['c_id'])->with('translate_table')->get();
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

        if (request()->file('banner') !== null) {
            $file = $this->storeFile(request()->file('banner'), $this->storePath);
            $req['banner'] = $file['path'];
        }
        $req['parent_id'] = 3;

        $category = $this->storeWithTranslation(new Page(), $req,
            ['title'=>$request->title,
                'seo_title'=>$request->seo_title,
                'body'=>$request->body,
                'seo_keywords'=>$request->seo_keywords,
                'seo_description'=>$request->seo_description,
                'language'=>$request->language

            ]);

        return redirect()->route('page.index')->with('success', 'Запись успешно создана');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.page.edit', compact('page'));
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

        $page = Page::find($id);
        if (request()->file('banner') !== null) {
            $this->deleteFile($page->banner);
            $file = $this->storeFile(request()->file('banner'), $this->storePath);
            $page->banner = $file['path'];
            $page->update(['banner' => $page->banner]);
        }


        $page->translate()->update( [
            'title'=>$request->title,
            'body'=>$request->body,
            'seo_title'=>$request->seo_title,
            'seo_keywords'=>$request->seo_keywords,
            'language'=>$request->language,
            'seo_description'=>$request->seo_description]);
        return redirect()->route('page.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Page::destroy($id);
        return redirect()->route('page.index')->with('success', 'Категория удалена');
    }
}
