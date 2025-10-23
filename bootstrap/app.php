<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Auth\AuthenticationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        apiPrefix: 'api',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Hanya redirect untuk web routes, JANGAN untuk API
        $middleware->redirectGuestsTo(function ($request) {
            // Jika request ke API, biarkan route middleware yang handle
            if ($request->is('api/*')) {
                return null;
            }
            // Hanya redirect web routes ke login
            return route('filament.admin.auth.login');
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Handle authentication exception untuk API
        // $exceptions->render(function (AuthenticationException $e, $request) {
        //     if ($request->expectsJson() || $request->is('api/*')) {
        //         return response()->json([
        //             'message' => 'Unauthenticated loh yah.'
        //         ], 401);
        //     }
        // });
    })->create();

