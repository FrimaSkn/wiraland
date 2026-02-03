<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SettingProduct extends Settings
{
    public $banner;
    public $thumb_catalogue;
    public $product_catalogue;
    public $ecommerce;

    public static function group(): string
    {
        return 'product';
    }
}
