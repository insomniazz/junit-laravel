<?php
/**
 * Created by PhpStorm.
 * User: sabo
 * Date: 2019/7/25 025
 * Time: 19:55:43
 */

namespace Sabo\JunitLaravel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class JunitServiceProvide extends ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'junit'
        );
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Sabo\JunitLaravel\Http\Controllers',
            'prefix' => 'junit',
        ];
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        });
    }
}