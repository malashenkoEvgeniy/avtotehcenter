<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Model;
use App\Models\TypeModel;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class TypeModelController extends BaseController
{
    protected $storePath = '/uploads/type-models/';
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {

        $models = TypeModel::orderBy('category_id')->paginate(10);
        return view('admin.type-models.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        $type_model = new TypeModel();
        $categories = Category::all();
        $model = Model::all();

        if(!empty($_REQUEST))
        dd($_REQUEST);
        return view('admin.type-models.create', compact('model', 'type_model', 'categories'));
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
        $characteristic = Characteristic::create($request->Year,
            $request->Hours, $request->lifting_force,$request->height_with_mast_folded,
            $request->fuel_type,$request->motor, $request->description);
        $req = request()->only('slug' );
        $req['category_id'] = $request->category_id;
        $req['model_id'] = $request->model_id;
        $req['characteristic_id'] = $characteristic->id;

        $req['slug'] = SlugService :: createSlug ( TypeModel:: class, 'slug' , $request->title );

        if (request()->file('images') !== null) {
            $file = $this->storeFile(request()->file('images'), $this->storePath);
            $req['images'] = $file['path'];
        }

        $models = $this->storeWithTranslation(new TypeModel(), $req,
            ['title'=>$request->title,
                'seo_title'=>$request->seo_title,
                'seo_keywords'=>$request->seo_keywords,
                'seo_description'=>$request->seo_description]);

        return redirect()->route('type-models.index')->with('success', 'Запись успешно создана');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $type_model = TypeModel::find($id);
        $categories = Category::all();
        $models = Model::all();
        return view('admin.type-models.edit', compact('type_model', 'categories', 'models'));
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
        return redirect()->route('type-models.index.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

       TypeModel::destroy($id);
        return redirect()->route('models.index')->with('success', 'Категория удалена');
    }
}
