<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Model;
use App\Models\Page;
use App\Models\ProductImage;
use App\Models\TypeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends BaseController
{

    public function show($slug)
    {
        $page = Page::where('slug', 'spectehnika')->first();

        $product = TypeModel::where('slug', $slug)->first();
        $title_page = $product->translate()->title;
        $body_page = $product->translate()->body;
        $product_images = ProductImage::where('product_id', $product->id)->get();
        $seo_data = [
            'title' => $product->translate()->seo_title,
            'keywords'=> $product->translate()->seo_keywords,
            'description'=>$product->translate()->seo_description
        ];
        $breadcrumbs = [
            ['link' =>$page->slug,
                'name'=>$page->translate()->title,
                'last'=>0
            ],
            ['link' =>$product->category->slug,
                'name'=>$product->category->translate()->title,
                'last'=>0
            ],
            ['link' =>$product->model->slug,
                'name'=>$product->model->translate()->title,
                'last'=>0
            ],
            ['link' =>'',
                'name'=>$title_page,
                'last'=>1   ]
        ];
        $previous = TypeModel::where([
            'category_id'=>$product->category->id,
            'model_id' =>$product->model->id
            ])
            ->where('id', '<', $product->id)
            ->get()->last();
        $next = TypeModel::where([
            'category_id'=>$product->category->id,
            'model_id' =>$product->model->id
        ])
            ->where('id', '>', $product->id)
            ->get()->first();

        return view('front.product', compact('previous', 'next','page', 'product', 'title_page', 'body_page', 'seo_data', 'product_images', 'breadcrumbs'));
    }

}
