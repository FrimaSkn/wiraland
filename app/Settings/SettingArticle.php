<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SettingArticle extends Settings
{
    public $banner;
    public $grid_title;
    public $grid_desc;

    public static function group(): string
    {
        return 'article';
    }
}
