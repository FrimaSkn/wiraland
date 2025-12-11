<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SettingPortfolio extends Settings
{
    public $banner;
    public $title;
    public $desc;

    public static function group(): string
    {
        return 'portfolio';
    }
}
