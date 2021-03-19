<?php


namespace App\Http\Controllers\Frontend;


use App\Models\Category;
use App\Models\Contact;
use App\Models\Page;

class BaseController
{
    public function __construct(){
        $menu_categories = Category::all();
        $page_on_menu = Page::all();
        $contact = Contact::first();
        view()->share(compact('menu_categories', 'page_on_menu', 'contact'));
    }
}
