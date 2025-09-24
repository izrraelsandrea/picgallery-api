<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api:__DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        $middleware->redirectTo(
        guests:'http://127.0.0.1:8000/api/galleries/1',
        users: 'http://127.0.0.1:8000/api/galleries/1'
        ); //con esto los redirijo pero no quiero redirigir, quiero devolver un status code. 

        
         $middleware->statefulApi(); //con este activo Sanctum 
        // $middleware->alias([
        //     'auth:sanctum' => \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class
        // ]);
        $middleware->append(\App\Http\Middleware\LogApiRequests::class);

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
