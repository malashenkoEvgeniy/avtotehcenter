<?php

namespace App\Models;


class MainPage extends BaseModel
{
    protected $table = 'main_pages';
    protected $guarded = [];
    protected $translateTable = "App\Models\MainPageTranslation";
}
