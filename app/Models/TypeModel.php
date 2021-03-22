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
        return $this->hasOne(Characteristic::class, 'product_id', 'id');
    }

    public function translate_table()
    {
        return $this->hasOne(TypeModelTranslation::class);
    }

    public static function creat($title, $body, $images, $brand_id, $category_id,  $year, $hours, $lifting_force, $height_with_mast_folded, $fuel_type,$v_motor, $motor, $description)
    {
        $model = new static();
        $model->slug = SlugService :: createSlug ( TypeModel :: class, 'slug' , $title);
        $model->images = $images;
        $model->model_id = $brand_id;
        $model->category_id = $category_id;
        $model->save();
        $product_id = $model->id;
        DB::table('type_model_translations')->insert(array('type_model_id'=>$model->id, 'title'=>$title, 'body'=>$body, 'seo_title'=>'Seo___'. $title));
        Characteristic::create($product_id, $lifting_force, $year, $hours, $height_with_mast_folded, $fuel_type,$v_motor, $motor, $description);
        return $model;
    }
}
