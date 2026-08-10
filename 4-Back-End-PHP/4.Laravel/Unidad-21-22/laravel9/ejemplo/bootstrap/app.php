<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->group('api', [
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            'throttle:api',
        ]);

        $middleware->alias([
            'example.middleware' => \App\Http\Middleware\ExampleMiddleware::class,
            'validate' => \App\Http\Middleware\ValidateFormMiddleware::class,
            'only.users' => \App\Http\Middleware\ExampleMiddleware::class,
            'only.admins' => \App\Http\Middleware\ExampleMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();