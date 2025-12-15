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

if (!function_exists('storyPayload')) {
    function storyPayload($payload, $type) {
        $data = collect($payload)->where('type', $type)->first();
        return nl2br($data['data']['text']);
    }
}
