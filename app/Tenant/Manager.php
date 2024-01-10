<?php

namespace App\Tenant;

class Manager
{
    /**
     * The tenant.
     *
     * @var [type]
     */
    protected $tenant;

    /**
     * Set the tenant.
     *
     * @param [type] $id [description]
     */
    public function setTenant($tenant)
    {
        $this->tenant = $tenant;
    }

    /**
     * Get the tenant.
     *
     * @return [type] [description]
     */
    public function getTenant()
    {
        return $this->tenant;
    }
}
