<?php

namespace App\Models;


class TypeModel extends BaseModel
{
    protected $table = 'type_models';
    protected $guarded = [];
    protected $translateTable = "App\Models\TypeModelTranslation";

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function characteristic()
    {
        return $this->hesOne(Characteristic::class);
    }
}
