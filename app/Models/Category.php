<?php

namespace App\Models;


use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\DB;

class Category extends BaseModel
{
    use Sluggable;
    protected $table = 'categories';
    protected $guarded = [];
    protected $translateTable = "App\Models\CategoryTranslation";

    public function type_model()
    {
        return $this->hasMany(TypeModel::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function creat($title, $images)
    {
        $category = new static();
        $category->slug = SlugService :: createSlug ( Category :: class, 'slug' , $title);
        $category->images = $images;
        $category->save();
        DB::table('category_translations')->insert(array('category_id'=>$category->id, 'title'=>$title, 'seo_title'=>'Seo___'. $title));
        return $category;
    }
}
