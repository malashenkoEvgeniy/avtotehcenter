<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Model;
use App\Models\Page;
use App\Models\TypeModel;
use Illuminate\Http\Request;

class SpecialEquipmentController extends BaseController
{
    public function requestFormDate(Request $request)
    {
        return response() ->json(TypeModel::where('model_id', $request['m_id'])->with('translate_table')->get());
    }

    public function show($slug)
    {

        if($slug == 'spectehnika') {
            $categories = Category::all();
            $page = Page::where('slug', $slug)->firstOrFail();
            $title_page = $page->translate()->title;
            $body_page = $page->translate()->body;
            $products = TypeModel::join('characteristics', 'type_models.id', '=', 'characteristics.product_id')
                ->with('characteristic', 'model')
                ->orderBy('lifting_force', 'asc')
                ->paginate(2);
            $model = Model::all();
            $seo_data = [
                'title' => $page->translate()->seo_title,
                'keywords'=> $page->translate()->seo_keywords,
                'description'=>$page->translate()->seo_description
            ];
        } else {

            $categories = Category::where('slug', $slug)->first();
            if ($categories!==null) {
                $model = Model::where('category_id', $categories->id)
                    ->get();
                $title_page = $categories->translate()->title;
                $body_page = $categories->translate()->body;
                $products = $products = TypeModel::join('characteristics', 'type_models.id', '=', 'characteristics.product_id')
                    ->where('category_id', $categories->id)
                    ->with('characteristic', 'model')
                    ->orderBy('lifting_force', 'asc')
                    ->paginate(2);
                $seo_data = [
                    'title' => $categories->translate()->seo_title,
                    'keywords' => $categories->translate()->seo_keywords,
                    'description' => $categories->translate()->seo_description
                ];
            } else {
                $models = Model::where('slug', $slug)->first();
                $model = Model::all();
                $title_page = $models->translate()->title;
                $body_page = $models->translate()->body;
                $products = $products = TypeModel::join('characteristics', 'type_models.id', '=', 'characteristics.product_id')
                    ->where('model_id', $models->id)
                    ->with('characteristic', 'model')
                    ->orderBy('lifting_force', 'asc')
                    ->paginate(2);
                $seo_data = [
                    'title' => $models->translate()->seo_title,
                    'keywords' => $models->translate()->seo_keywords,
                    'description' => $models->translate()->seo_description
                ];
            }
        }
        return view('front.special_equipment', compact( 'model','products', 'title_page', 'body_page', 'seo_data', 'slug'));
    }


    public function desckshow($slug)
    {
        if($slug == 'spectehnika') {
            $categories = Category::all();
            $model = Model::all();
            $page = Page::where('slug', $slug)->firstOrFail();
            $title_page = $page->translate()->title;
            $body_page = $page->translate()->body;
            $products = TypeModel::join('characteristics', 'type_models.id', '=', 'characteristics.product_id')
                ->with('characteristic', 'model')
                ->orderBy('lifting_force', 'desc')
                ->paginate(2);

            $seo_data = [
                'title' => $page->translate()->seo_title,
                'keywords'=> $page->translate()->seo_keywords,
                'description'=>$page->translate()->seo_description
            ];
        } else {

            $categories = Category::where('slug', $slug)->first();
            if ($categories!==null) {
                $model = Model::where('category_id', $categories->id)
                    ->get();
                $title_page = $categories->translate()->title;
                $body_page = $categories->translate()->body;
                $products = $products = TypeModel::join('characteristics', 'type_models.id', '=', 'characteristics.product_id')
                    ->where('category_id', $categories->id)
                    ->with('characteristic', 'model')
                    ->orderBy('lifting_force', 'desc')
                    ->paginate(2);
                $seo_data = [
                    'title' => $categories->translate()->seo_title,
                    'keywords' => $categories->translate()->seo_keywords,
                    'description' => $categories->translate()->seo_description
                ];
            } else {
                $models = Model::where('slug', $slug)->first();
                $model = Model::all();
                $title_page = $models->translate()->title;
                $body_page = $models->translate()->body;
                $products = $products = TypeModel::join('characteristics', 'type_models.id', '=', 'characteristics.product_id')
                    ->where('model_id', $models->id)
                    ->with('characteristic', 'model')
                    ->orderBy('lifting_force', 'desc')
                    ->paginate(2);
                $seo_data = [
                    'title' => $models->translate()->seo_title,
                    'keywords' => $models->translate()->seo_keywords,
                    'description' => $models->translate()->seo_description
                ];
            }
        }
        return view('front.special_equipment', compact('categories', 'model', 'products', 'title_page', 'body_page', 'seo_data' , 'slug'));
    }
    public function filter()
    {
        if(\request()->marka>0){
            $product = TypeModel::where('id', \request()->marka)->first();
            return redirect(route('product', ['slug'=>$product->slug]));
        } else {
            $model = Model::where('id', \request()->models)->first();
            return redirect(route('special_equipment', ['slug'=>$model->slug]));
        }
    }

}
