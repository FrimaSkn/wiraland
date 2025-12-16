<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', config('app.name'))">
    <meta name="author" content="@yield('meta_author', 'designcub3')">
    <x-meta-head />
    @yield('meta')

    @if (env('GOOGLE_RECAPTCHA_STATUS'))
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif

    @stack('before-styles')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('fonts/stylesheet.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

    @stack('after-styles')
</head>
<body>
    @include('partials.nav')
    <x-toast />


    <div id="app" class="overflow-hidden">
        <main>
            @yield('content')
        </main>
    </div><!--app-->

    @include('partials.footer')

    @stack('before-scripts')
    @livewireScripts
    @stack('after-scripts')
    <script src="https://vjs.zencdn.net/8.23.4/video.min.js"></script>
</body>
</html>
