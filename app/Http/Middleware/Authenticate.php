<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}

// Ele analisa se existe o login e se o usuario pode ter acesso as info do site. Serve como uma autentificação. Ele faz isso atraves do token, um padrão do laravel. O middleware vai por meio do token para realizar essa autentificação.