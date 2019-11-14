<?php
/**
 * Created by PhpStorm
 * User: xiaozhu
 * Date: 2019/11/14
 * Time: 10:19
 */
namespace Smallzhu\UnitLaravel\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class UnitServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * @return void
     */
    public function register()
    {
       // echo "this is a test serviceProvider";
        $this->registerRoutes();
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'unit');
    }

    /**
     * Bootstrap any application services.
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }
    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            'namespace' => 'Smallzhu\UnitLaravel\Http\Controllers',
            'prefix' => 'unit',
            'middleware' => 'web'
        ];
    }

}