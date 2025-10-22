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
        // Jangan redirect API requests ke login
        $middleware->redirectGuestsTo(function ($request) {
            if ($request->expectsJson() || $request->is('api/*')) {
                abort(401, 'Unauthenticated.');
            }
            return route('filament.admin.auth.login');
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (AuthenticationException $e, $request) {
            if ($request->expectsJson() || $request->is('api/*')) {
                return response()->json([
                    'message' => 'Unauthenticated.'
                ], 401);
            }
        });
    })->create();
