<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Model;
use App\Models\Page;
use App\Models\TypeModel;
use Illuminate\Http\Request;

class SpecialEquipmentController extends BaseController
{
    protected $paginate_value = 10;
    public function requestFormDate(Request $request)
    {
        return response() ->json(TypeModel::where('category_id', $request['c_id'])->with('translate_table')->get());
    }

    public function show($slug)
    {
        if($slug == 'spectehnika') {
            $categories = Category::all();
            $page = Page::where('slug', $slug)->first();
            $title_page = $page->translate()->title;
            $body_page = $page->translate()->body;
            $products = TypeModel::join('characteristics', 'type_models.id', '=', 'characteristics.product_id')
                ->with('characteristic')
                ->orderBy('lifting_force', 'asc')
                ->paginate($this->paginate_value);
            $seo_data = [
                'title' => $page->translate()->seo_title,
                'keywords'=> $page->translate()->seo_keywords,
                'description'=>$page->translate()->seo_description
            ];
        } else {

            $category = Category::where('slug', $slug)->first();
            $categories = Category::all();
            $title_page = $category->translate()->title;
            $body_page = $category->translate()->body;
            $products = TypeModel::join('characteristics', 'type_models.id', '=', 'characteristics.product_id')
                ->where('category_id', $category->id)
                ->with('characteristic')
                ->orderBy('lifting_force', 'asc')
                ->paginate($this->paginate_value);

            $seo_data = [
                'title' => $category->translate()->seo_title,
                'keywords' => $category->translate()->seo_keywords,
                'description' => $category->translate()->seo_description
            ];
            $page = Page::where('slug','spectehnika')->first();
        }
        $breadcrumbs = [
            'current' => $page->translate()->title,
            'parent' => $page->parent_id,
        ];
        return view('front.special_equipment', compact( 'categories', 'products', 'title_page', 'body_page', 'seo_data', 'slug', 'breadcrumbs'));
    }


    public function desckshow($slug)
    {
        if($slug == 'spectehnika') {
            $categories = Category::all();
            $page = Page::where('slug', $slug)->first();
            $title_page = $page->translate()->title;
            $body_page = $page->translate()->body;
            $products = TypeModel::join('characteristics', 'type_models.id', '=', 'characteristics.product_id')
                ->with('characteristic')
                ->orderBy('lifting_force', 'desc')
                ->paginate($this->paginate_value);
            $seo_data = [
                'title' => $page->translate()->seo_title,
                'keywords'=> $page->translate()->seo_keywords,
                'description'=>$page->translate()->seo_description
            ];
        } else {

            $category = Category::where('slug', $slug)->first();
            $categories = Category::all();
            $title_page = $category->translate()->title;
            $body_page = $category->translate()->body;
            $products = TypeModel::join('characteristics', 'type_models.id', '=', 'characteristics.product_id')
                ->where('category_id', $category->id)
                ->with('characteristic')
                ->orderBy('lifting_force', 'desc')
                ->paginate($this->paginate_value);

            $seo_data = [
                'title' => $category->translate()->seo_title,
                'keywords' => $category->translate()->seo_keywords,
                'description' => $category->translate()->seo_description
            ];
            $page = Page::where('slug','spectehnika')->first();
        }
        $breadcrumbs = [
            'current' => $page->translate()->title,
            'parent' => $page->parent_id,
        ];
        return view('front.special_equipment', compact( 'categories', 'products', 'title_page', 'body_page', 'seo_data', 'slug', 'breadcrumbs'));
    }
    public function filter()
    {
        if(\request()->marka>0){
            $product = TypeModel::where('id', \request()->marka)->first();
            return redirect(route('product', ['id'=>$product->id]));
        } else {
            $category = Category::where('id', \request()->category)->first();

            return redirect(route('special_equipment', ['slug'=>$category->slug]));
        }
    }

}
