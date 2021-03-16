<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Characteristic extends BaseModel
{
    protected $table = 'characteristics';
    protected $guarded = [];
    protected $translateTable = "App\Models\CharacteristicTranslation";

    public function type_model()
    {
        return $this->belongsTo(TypeModel::class);
    }

    public function trans_table()
    {
        return $this->hasOne(CharacteristicTranslation::class);
    }

    public static function create($product_id, $lifting_force = 0, $year=null, $hours=null,  $height_with_mast_folded=null, $fuel_type=null, $v_motor=null, $motor=null, $description=null)
    {
        $characteristic = new static();
        $characteristic->product_id = $product_id;
        $characteristic->lifting_force = $lifting_force;
        $characteristic->save();
        DB::table('characteristic_translations')->insert(array('characteristic_id'=>$characteristic->id, 'Year'=>$year,
            'Hours'=>$hours,
            'height_with_mast_folded'=>$height_with_mast_folded,
            'fuel_type' =>$fuel_type,'v_motor'=>$v_motor, 'motor'=>$motor, 'description'=>$description));
        return $characteristic;
    }
}
