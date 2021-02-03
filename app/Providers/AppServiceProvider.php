<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (is_file(public_path('manifest.json'))) {
            View::share('manifest', json_decode(file_get_contents(public_path('manifest.json')), true));
        } else {
            View::share('manifest', [], true);
        }
    }
}
