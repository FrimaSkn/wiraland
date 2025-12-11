<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SettingHome extends Settings
{
    public $banner,
           $section_one_title,
           $section_one_desc,
           $section_one_video,
           $services,
           $section_image;

    public static function group(): string
    {
        return 'home';
    }
}
