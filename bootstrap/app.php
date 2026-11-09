<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Import your custom middleware class
use App\Http\Middleware\AdminDashboard;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Alias for your custom middleware
        $middleware->alias([
            'admin' => AdminDashboard::class,
        ]);

        // Add to 'admin' middleware group if needed (optional, only if you use the group)
        $middleware->appendToGroup('admin', [
            AdminDashboard::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create();
