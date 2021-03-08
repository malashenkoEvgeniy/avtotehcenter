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

    public static function create($year=null, $hours=null, $lifting_force=null, $height_with_mast_folded=null, $fuel_type=null, $motor=null, $description=null)
    {
        $characteristic = new static();
        $characteristic->save();
        DB::table('characteristic_translations')->insert(array('characteristic_id'=>$characteristic->id, 'Year'=>$year,
            'Hours'=>$hours, 'lifting_force'=>$lifting_force,
            'height_with_mast_folded'=>$height_with_mast_folded,
            'fuel_type' =>$fuel_type, 'motor'=>$motor, 'description'=>$description));
        return $characteristic;
    }
}
