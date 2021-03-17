<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends BaseController
{
    protected $storePath = '/uploads/type-models/';
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_images = ProductImage::paginate(10);
        $parent_product_id = \request()->parent_product_id;
        return view('admin.product_images.index', compact('product_images', 'parent_product_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        if (request()->file('url') !== null) {
            foreach (request()->file('url') as $item) {
                if ($item->extension() == 'mp4'){
                    $is_video = 1;
                }else{
                    $is_video = 0;
                }
                $file = $this->storeFile($item, $this->storePath);
                ProductImage::create(['url' => $file['path'], 'product_id'=>\request()->parent_product_id, 'is_video'=>$is_video ]);
            }
        }


        return redirect()->route('product_images.index', ['parent_product_id'=>\request()->parent_product_id])->with('success', 'Запись успешно создана');
    }



    public function destroy($id)
    {

        ProductImage::destroy($id);
        return redirect()->route('admin.product_images.index')->with('success', 'Категория удалена');
    }
}
