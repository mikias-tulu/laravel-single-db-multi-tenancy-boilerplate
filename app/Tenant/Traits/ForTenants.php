<?php

namespace App\Tenant\Traits;

use App\Tenant\Manager;
use App\Tenant\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Model;
use App\Tenant\Observers\TenantObserver;

trait ForTenants
{
    public static function boot()
    {
        parent::boot();

        $manager = app(Manager::class);

        static::addGlobalScope(
            new TenantScope($manager->getTenant())
        );

        static::observe(
            app()->make(TenantObserver::class)
        );
    }
}
