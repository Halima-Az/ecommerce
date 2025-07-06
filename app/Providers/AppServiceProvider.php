<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Nette\Utils\Paginator as UtilsPaginator;
use Illuminate\Pagination\Paginator;
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
    public function boot():void
    {
        Paginator::useTailwind();
       
    }
}
