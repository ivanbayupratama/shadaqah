<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Middleware\EnsureJsonResponse;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(callback: function (Middleware $middleware): void {

        $middleware->append(VerifyCsrfToken::class);

        // Menggunakan metode 'append' untuk menambahkan middleware dari branch `dev-campaignFeature`
        $middleware->append(\App\Http\Middleware\VerifyCsrfToken::class);


        // Menggunakan middleware group dari branch `Dev`
        $middleware->group('api', [
            Illuminate\Routing\Middleware\SubstituteBindings::class,

            EnsureJsonResponse::class, // Middleware untuk memastikan respons JSON

            App\Http\Middleware\EnsureJsonResponse::class, // Middleware untuk memastikan respons JSON

        ]);

        $middleware->group('web', [
            Illuminate\Session\Middleware\StartSession::class,
            Illuminate\View\Middleware\ShareErrorsFromSession::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
