<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SettingService extends Settings
{
    public $banner;
    public $grid_title;
    public $grid_desc;
    public $services;
    public $section_two_title;
    public $section_two;

    public static function group(): string
    {
        return 'service';
    }
}
