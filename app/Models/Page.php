<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\Category;
use App\Models\TypeModel;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Page extends BaseModel
{
    use Sluggable;
    protected $table = 'pages';
    protected $guarded = [];
    protected $translateTable = "App\Models\PageTranslation";



    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function creat($title, $body, $banner, $parent_id = null)
    {
        $page = new static();
        $page->slug = SlugService :: createSlug ( Page :: class, 'slug' , $title);
        $page->banner = $banner;
        $page->parent_id = $parent_id;
        $page->save();
        DB::table('page_translations')->insert(array('page_id'=>$page->id, 'title'=>$title, 'body'=>$body, 'seo_title'=>'Seo___'. $title));
        return $page;
    }
}
