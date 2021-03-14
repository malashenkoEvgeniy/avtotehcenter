<?php

namespace App\Models;


use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\DB;

class TypeModel extends BaseModel
{
    use Sluggable;
    protected $table = 'type_models';
    protected $guarded = [];
    protected $translateTable = "App\Models\TypeModelTranslation";

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

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function characteristic()
    {
        return $this->hesOne(Characteristic::class);
    }

    public static function creat($title, $images, $category_id, $model_id,
     $year, $hours, $lifting_force, $height_with_mast_folded, $fuel_type, $motor, $description)
    {
        $model = new static();
        $model->slug = SlugService :: createSlug ( Model :: class, 'slug' , $title);
        $model->images = $images;
        $model->category_id = $category_id;
        $model->model_id = $model_id;
        $characteristic = Characteristic::create($year, $hours, $lifting_force, $height_with_mast_folded, $fuel_type, $motor, $description);
        $model->characteristic_id = $characteristic->id;
        $model->save();
        DB::table('type_model_translations')->insert(array('type_model_id'=>$model->id, 'title'=>$title));
        return $model;
    }
}
