<?php

use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\Authenticate;   

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // ...
        EnsureFrontendRequestsAreStateful::class,
    ];

    protected $routeMiddleware = [

        'auth' => Authenticate::class,

        'role' => RoleMiddleware::class,
    ];
    /**
     * The application's route middleware groups.
     *
     * @var array
     */

protected $middlewareGroups = [
    // 'web' => [
    //     // ...
    //     EnsureFrontendRequestsAreStateful::class,
    // ],

    'api' => [
        'throttle:api',
        EnsureFrontendRequestsAreStateful::class,
    ],


];

}
?>