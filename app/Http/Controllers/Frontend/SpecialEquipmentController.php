<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Model;
use App\Models\Page;
use App\Models\ProductImage;
use App\Models\TypeModel;
use Illuminate\Http\Request;

class SpecialEquipmentController extends BaseController
{
    protected $paginate_value = 2;
    public function requestFormDate(Request $request)
    {
        return response() ->json(Model::where('category_id', $request['c_id'])->with('translate_table')->get());
    }



    public function show($slug)
    {
        $btn_filter_marks_id = 0;
        $btn_filter_marks = "Марка";
        if($slug == 'spectehnika') {
            $categories = Category::all();
            $brends = Model::all();
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
            $btn_filter_categories = [
                'link'=>0,
                'ddd'=>'ddd',
                'title'=>'Тип спецтехники'];
            $breadcrumbs = [
                ['link' =>'',
                    'name'=>$page->translate()->title,
                    'last'=>1   ]
                ];
            $class_btn = '';
            $curent_category = '-1';
        } else {
            $category = Category::where('slug', $slug)->first();
            $categories = Category::all();
            $brends = Model::all();
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

            $btn_filter_categories =
                [ 'link'=>$category->id,
                    'ddd'=>'',
                    'title'=>$category->translate()->title];
            $page = Page::where('slug', 'spectehnika')->first();
            $breadcrumbs = [
                ['link' =>$page->slug,
                    'name'=>$page->translate()->title,
                    'last'=>0   ],
                ['link' =>'',
                    'name'=>$category->translate()->title,
                    'last'=>1   ]
            ];
            $class_btn = 'class_btn';
            $curent_category = $category->id;
        }

        $marka = 'Марка';
        return view('front.special_equipment', compact('curent_category','brends', 'categories','brends', 'products', 'title_page', 'body_page', 'seo_data', 'slug', 'breadcrumbs', 'btn_filter_categories','btn_filter_marks','btn_filter_marks_id', 'marka', 'class_btn'));
    }

    public function desckshow($slug)
    {
        $btn_filter_marks_id = 0;
        $btn_filter_marks = "Марка";
        if($slug == 'spectehnika') {
            $categories = Category::all();
            $brends = Model::all();
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
            $btn_filter_categories = [
                'link'=>0,
                'ddd'=>'ddd',
                'title'=>'Тип спецтехники'];
            $breadcrumbs = [
                ['link' =>'',
                    'name'=>$page->translate()->title,
                    'last'=>1   ]
            ];
            $class_btn = '';
            $curent_category = '-1';
        } else {
            $category = Category::where('slug', $slug)->first();
            $categories = Category::all();
            $brends = Model::all();
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
            $btn_filter_categories =
                [ 'link'=>$category->id,
                    'ddd'=>'',
                    'title'=>$category->translate()->title];
            $page = Page::where('slug', 'spectehnika')->first();
            $breadcrumbs = [
                ['link' =>$page->slug,
                    'name'=>$page->translate()->title,
                    'last'=>0   ],
                ['link' =>'',
                    'name'=>$category->translate()->title,
                    'last'=>1   ]
            ];
            $class_btn = 'class_btn';
            $curent_category = $category->id;
        }

        $marka = 'Марка';
        return view('front.special_equipment', compact('curent_category','brends', 'categories','brends', 'products', 'title_page', 'body_page', 'seo_data', 'slug', 'breadcrumbs', 'btn_filter_categories','btn_filter_marks','btn_filter_marks_id', 'marka', 'class_btn'));}

    public function showM($slugC, $slugM)
    {
        $category = Category::where('slug', $slugC)->first();
        $marka = Model::where('slug', $slugM)->first();
        $btn_filter_marks_id = $marka->id;
        $btn_filter_marks = $marka->translate()->title;

        $categories = Category::all();
        $brends = Model::all();
        $title_page = $marka->translate()->title;
        $body_page = $marka->translate()->body;
        $page = Page::where('slug', 'spectehnika')->first();
        if($slugC=='spectehnika') {
            $condition = ['model_id'=>$marka->id];
            $btn_filter_categories = [
                'link'=>0,
                'ddd'=>'ddd',
                'title'=>'Тип спецтехники'];

        } else {
            $btn_filter_categories =
                [ 'link'=>$category->id,
                    'ddd'=>'',
                    'title'=>$category->translate()->title];
            $condition = ['category_id' => $category->id, 'model_id'=>$marka->id];
        }

        $products = TypeModel::join('characteristics', 'type_models.id', '=', 'characteristics.product_id')
            ->where($condition)
            ->with('characteristic')
            ->orderBy('lifting_force', 'asc')
            ->paginate($this->paginate_value);

        $seo_data = [
            'title' => $marka->translate()->seo_title,
            'keywords' => $marka->translate()->seo_keywords,
            'description' => $marka->translate()->seo_description
        ];


        $breadcrumbs = [
            ['link' =>$page->slug,
                'name'=>$page->translate()->title,
                'last'=>0   ],
            ['link' =>'',
                'name'=>$marka->translate()->title,
                'last'=>1 ]
        ];
        $class_btn = 'class_btn';
        $curent_category = -1;
        return view('front.special_equipment', compact('curent_category', 'categories','brends', 'products', 'title_page', 'body_page', 'seo_data', 'slugC','slugM',  'breadcrumbs', 'btn_filter_categories','btn_filter_marks','btn_filter_marks_id', 'marka', 'class_btn'));
    }

    public function descshowM($slugC, $slugM)
    {
        $category = Category::where('slug', $slugC)->first();
        $marka = Model::where('slug', $slugM)->first();
        $btn_filter_marks_id = $marka->id;
        $btn_filter_marks = $marka->translate()->title;

        $categories = Category::all();
        $brends = Model::all();
        $title_page = $marka->translate()->title;
        $body_page = $marka->translate()->body;
        $page = Page::where('slug', 'spectehnika')->first();
        if($slugC=='spectehnika') {
            $condition = ['model_id'=>$marka->id];
            $btn_filter_categories = [
                'link'=>0,
                'ddd'=>'ddd',
                'title'=>'Тип спецтехники'];

        } else {
            $btn_filter_categories =
                [ 'link'=>$category->id,
                    'ddd'=>'',
                    'title'=>$category->translate()->title];
            $condition = ['category_id' => $category->id, 'model_id'=>$marka->id];
        }

        $products = TypeModel::join('characteristics', 'type_models.id', '=', 'characteristics.product_id')
            ->where($condition)
            ->with('characteristic')
            ->orderBy('lifting_force', 'desc')
            ->paginate($this->paginate_value);

        $seo_data = [
            'title' => $marka->translate()->seo_title,
            'keywords' => $marka->translate()->seo_keywords,
            'description' => $marka->translate()->seo_description
        ];


        $breadcrumbs = [
            ['link' =>$page->slug,
                'name'=>$page->translate()->title,
                'last'=>0   ],
            ['link' =>'',
                'name'=>$marka->translate()->title,
                'last'=>1 ]
        ];
        $class_btn = 'class_btn';
        $curent_category = -1;
        return view('front.special_equipment', compact('curent_category', 'categories','brends', 'products', 'title_page', 'body_page', 'seo_data', 'slugC','slugM',  'breadcrumbs', 'btn_filter_categories','btn_filter_marks','btn_filter_marks_id', 'marka', 'class_btn'));
    }
    public function filter()
    {
//        dd(\request());

       if(\request()->category == null && \request()->marka == 0){
           return redirect(route('special_equipment', ['slug'=>'spectehnika']));
       }

        if(\request()->category == null && \request()->marka > 0){

            $model = Model::where('id', \request()->marka)->first();

            return redirect(route('special_equipment_m', ['slugC'=>"spectehnika", 'slugM'=>$model->slug]));
        }

        if(\request()->marka>0){
            $category = Category::where('id', \request()->category)->first();
            $model = Model::where('id', \request()->marka)->first();
            return redirect(route('special_equipment_m', ['slugC'=>$category->slug, 'slugM'=>$model->slug]));
        } else {
            $category = Category::where('id', \request()->category)->first();

            return redirect(route('special_equipment', ['slug'=>$category->slug]));
        }
    }

}
