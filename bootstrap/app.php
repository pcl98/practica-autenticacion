<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AdminMiddleware; // Asegúrate de importar tu middleware

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Aquí registramos el middleware
        $middleware->alias([
            'admin' => AdminMiddleware::class, // Agrega tu middleware aquí
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
