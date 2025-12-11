<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer(
            ['components.direktur', 'components.circular', 'partials.footer'],
            function ($view) {
                $view->with([
                    'generalContent' => new \App\Settings\GeneralSetting,
                ]);
            }
        );
    }
}
