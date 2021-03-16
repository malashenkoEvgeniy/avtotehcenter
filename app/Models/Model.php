<?php

namespace App\Models;


use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\DB;

class Model extends BaseModel
{
    use Sluggable;
    protected $table = 'models';
    protected $guarded = [];
    protected $translateTable = "App\Models\ModelTranslation";

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type_model()
    {
        return $this->hasMany(TypeModel::class);
    }

    public function translate_table()
    {
        return $this->hasOne(ModelTranslation::class);
    }

    public static function creat($title, $images, $category_id)
    {
        $model = new static();
        $model->slug = SlugService :: createSlug ( Model :: class, 'slug' , $title);
        $model->images = $images;
        $model->category_id = $category_id;
        $model->save();
        DB::table('model_translations')->insert(array('model_id'=>$model->id, 'title'=>$title, 'seo_title'=>'Seo___'. $title));
        return $model;
    }
}
