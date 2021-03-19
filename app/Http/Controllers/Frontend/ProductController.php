<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Page;
use App\Models\ProductImage;
use App\Models\TypeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends BaseController
{

    public function show($slug)
    {
        $page = Page::where('id', 2)->first();
        $product = TypeModel::where('id', $slug)->first();
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
            ['link' =>Category::where('id', $product->category_id)->first()->slug,
                'name'=>Category::where('id', $product->category_id)->first()->translate()->title,
                'last'=>0
            ],
            ['link' =>$slug,
                'name'=>$title_page,
                'last'=>1   ]
        ];

        return view('front.product', compact('page', 'product', 'title_page', 'body_page', 'seo_data', 'product_images', 'breadcrumbs'));
    }

}
