<?php

namespace App\Models;


use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;

class MainPage extends BaseModel
{
    protected $table = 'main_pages';
    protected $guarded = [];
    protected $translateTable = "App\Models\MainPageTranslation";

    public static function creat($title, $body, $banner)
    {
        $page = new static();
        $page->banner = $banner;
        $page->save();
        DB::table('main_page_translations')->insert(array('main_page_id'=>$page->id, 'title'=>$title, 'body'=>$body));
        return $page;
    }
}
