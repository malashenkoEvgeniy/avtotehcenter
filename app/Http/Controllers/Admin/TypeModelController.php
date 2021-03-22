<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Model;
use App\Models\ProductImage;
use App\Models\TypeModel;
use App\Models\TypeModelTranslation;
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
        $models = Model::all();

        return view('admin.type-models.create', compact( 'type_model', 'categories', 'models'));
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
        $req['model_id'] = $request->model_id;
        $req['slug'] = SlugService :: createSlug ( TypeModel:: class, 'slug' , $request->title );

        if (request()->file('images') !== null) {
            $file = $this->storeFile(request()->file('images'), $this->storePath);
            $req['images'] = $file['path'];
        }

        $models = $this->storeWithTranslation(new TypeModel(), $req,
            ['title'=>$request->title,
                'body'=>$request->body,
                'seo_title'=>$request->seo_title,
                'seo_keywords'=>$request->seo_keywords,
                'seo_description'=>$request->seo_description]);

        $models['model']->slug = $models['model']->slug . $models['model']->id;
        $models['model']->update;
        Characteristic::create($models['model']->id, $request->lifting_force, $request->Year,
            $request->Hours, $request->height_with_mast_folded, $request->fuel_type, $request->v_motor, $request->motor, $request->description);
        $type_model = TypeModel::where('id', $models['model']->id)->first();
        $type_model->slug .= '-'.$type_model->id;
        $type_model->update();
        $type_model_translate = TypeModelTranslation::where('type_model_id', $type_model->id)->first();
        $type_model_translate->title .= ' #'.$type_model->id;
        $type_model_translate->update();

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
        $models = Model::all();
        $categories = Category::all();
        $product_images = ProductImage::where('product_id', $id)->get();
        return view('admin.type-models.edit', compact('type_model', 'models', 'categories', 'product_images'));
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

        $model = TypeModel::find($id);
        if (request()->file('images') !== null) {
            $this->deleteFile($model->image);
            $file = $this->storeFile(request()->file('images'), $this->storePath);
            $model->images = $file['path'];
            $model->update(['images' => $model->images]);
        }
        $model->update(['category_id' => $request->category_id]);

        $model->translate()->update( ['title'=>$request->title,
            'body'=>$request->body,
            'seo_title'=>$request->seo_title,
            'seo_keywords'=>$request->seo_keywords,
            'seo_description'=>$request->seo_description]);
        return redirect()->route('type-models.index')->with('success', 'Изменения сохранены');
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
        return redirect()->route('type-models.index')->with('success', 'Категория удалена');
    }
}
