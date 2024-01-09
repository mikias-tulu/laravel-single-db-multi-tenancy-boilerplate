<?php

namespace App\Http\Middleware\Tenant;

use Closure;
use App\Company;
use App\Tenant\Manager;

class Config
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $tenant = $request->tenant();

        config()->set('app.name', $tenant->name);

        return $next($request);
    }
}
