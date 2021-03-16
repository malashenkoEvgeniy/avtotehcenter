<?php


namespace App\Http\Controllers\Frontend;


use App\Models\Category;

class BaseController
{
    public function __construct(){
        $menu_categories = Category::all();
        view()->share(compact('menu_categories'));
    }
}
