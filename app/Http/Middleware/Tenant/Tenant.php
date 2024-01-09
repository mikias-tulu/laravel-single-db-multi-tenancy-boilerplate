<?php

namespace App\Http\Middleware\Tenant;

use Closure;
use App\Company;
use App\Tenant\Manager;

class Tenant
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
        $tenant = $this->resolveTenant(
            $request->company ?: session()->get('tenant')
        );

        if (!auth()->user()->companies->contains('id', $tenant->id)) {
            return redirect('/home');
        }

        $this->registerTenant($tenant);

        return $next($request);
    }

    /**
     * Set up tenant stuff.
     *
     * @param [type] $tenant [description]
     */
    protected function registerTenant($tenant)
    {
        app(Manager::class)->setTenant($tenant);

        session()->put('tenant', $tenant->id);
    }

    /**
     * Resolve the tenant.
     *
     * @param  [type] $tenantId [description]
     * @return [type]           [description]
     */
    protected function resolveTenant($tenantId)
    {
        return Company::find($tenantId);
    }
}
