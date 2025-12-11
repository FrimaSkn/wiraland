<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSetting extends Settings
{
    public $circular,
           $director,
           $social_media,
           $banner_faq,
           $banner_testimonial;

    public static function group(): string
    {
        return 'general';
    }
}
