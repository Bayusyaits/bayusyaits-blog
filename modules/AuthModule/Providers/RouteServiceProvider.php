<?php

namespace Modules\AuthModule\Providers;

use App\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $moduleNamespace = 'Modules\AuthModule\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const MODULE = 'AuthModule';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        //
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'prefix'    => 'auth',
            'middleware' => 'cors'
        ], function ($router) {
            require module_path(self::MODULE, 'Routes/api.php');
        });
    }
}
