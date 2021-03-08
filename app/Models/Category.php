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

   public function models()
   {
       return $this-hasMany(Model::class);
   }

    public function type_model()
    {
        return $this->belongsTo(TypeModel::class);
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
        DB::table('category_translations')->insert(array('category_id'=>$category->id, 'title'=>$title));
        return $category;
    }
}
