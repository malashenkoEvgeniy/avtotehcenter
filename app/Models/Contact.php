<?php

namespace App\Models;


class Contact extends BaseModel
{
    protected $table = 'contacts';
    protected $guarded = [];
    protected $translateTable = "App\Models\ContactTranslation";
}
