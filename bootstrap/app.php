<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\SetLocale;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        // Menambahkan SetLocale ke dalam grup middleware 'web'
        $middleware->web(append: [
            SetLocale::class,
        ]);

        $middleware->alias([
            'admin' => AdminMiddleware::class,
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->create();

// Set direktori storage ke /tmp untuk lingkungan Vercel serverless
$app->useStoragePath('/tmp/storage');

return $app;