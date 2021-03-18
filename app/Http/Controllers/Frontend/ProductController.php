<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Page;
use App\Models\ProductImage;
use App\Models\TypeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends BaseController
{

    public function show($id)
    {
        $page = Page::where('id', 2)->first();
        $product = TypeModel::where('id', $id)->first();
        $title_page = $product->translate()->title;
        $body_page = $product->translate()->body;
        $product_images = ProductImage::where('product_id', $id)->get();
        $seo_data = [
            'title' => $product->translate()->seo_title,
            'keywords'=> $product->translate()->seo_keywords,
            'description'=>$product->translate()->seo_description
        ];
        $breadcrumbs = [
            'current' => $page->translate()->title,
            'parent' => 2,
        ];

        return view('front.product', compact('page', 'product', 'title_page', 'body_page', 'seo_data', 'product_images', 'breadcrumbs'));
    }

}
