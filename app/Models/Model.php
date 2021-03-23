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

    public function type_models()
    {
        return $this->hasMany("App\Models\TypeModel",  'model_id', 'id');
    }

    public static function creat($title, $body = null)
    {
        $model = new static();
        $model->slug = SlugService :: createSlug ( Model :: class, 'slug' , $title);
        $model->save();
        DB::table('model_translations')->insert(array('model_id'=>$model->id, 'title'=>$title, 'body'=>$body, 'seo_title'=>'Seo___'. $title));
        return $model;
    }

}
