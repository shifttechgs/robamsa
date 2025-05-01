<?php

namespace App\Http\Middleware;


use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;


class VerifyCsrfToken extends Middleware
{
    protected $except = [
        '/payfast/notify',  // Add the route you want to exclude from CSRF protection
    ];
}
