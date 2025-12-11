<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SettingAbout extends Settings
{
    public $banner;
    public $grid_title;
    public $grid_desc;
    public $vision_mission;
    public $journey;

    public static function group(): string
    {
        return 'about';
    }
}
