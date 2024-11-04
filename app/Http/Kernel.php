<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Global HTTP middleware
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\StartSession::class,
        \Illuminate\Session\Middleware\AuthenticateSession::class,
        \App\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\RedirectIfAuthenticated::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            // Middleware for web routes
            'web',
        ],

        'api' => [
            // Middleware for API routes
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
        ],
    ];

    protected $routeMiddleware = [
        // Custom route middleware
        'auth' => \App\Http\Middleware\Authenticate::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \App\Http\Middleware\EnsurePasswordIsConfirmed::class,
        'signed' => \App\Http\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    ];
}
