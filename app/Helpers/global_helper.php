<?php
use Illuminate\Support\Facades\Request;

if (!function_exists('activeMenu')) {
    function activeMenu($uri = '', $activeClass = 'active') {
        $active = '';
        if (Request::routeIs($uri) || Request::routeIs($uri . '*')) {
            $active = $activeClass;
        }
        return $active;
    }
}
