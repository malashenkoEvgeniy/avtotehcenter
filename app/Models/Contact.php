<?php

namespace App\Models;


class Contact extends BaseModel
{
    protected $table = 'contacts';
    protected $guarded = [];
    protected $translateTable = "App\Models\ContactTranslation";

    public static function create($title, $address, $phone_1, $phone_2, $fax, $viber, $telegram,  $email1, $email2, $facebook, $instagram ){
        $data = new static();
        $data->phone_1 = $phone_1;
        $data->phone_2 = $phone_2;
        $data->fax = $fax;
        $data->viber = $viber;
        $data->telegram = $telegram;
        $data->email1 = $email1;
        $data->email2 = $email2;
        $data->facebook = $facebook;
        $data->instagram = $instagram;
        $data->save();
        ContactTranslation::create(['title'=>$title, 'contact_id'=>$data->id, 'address'=>$address]);
        return $data;
    }
}
