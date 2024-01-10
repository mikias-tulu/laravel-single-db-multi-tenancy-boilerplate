<?php

namespace App\Tenant\Scopes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class TenantScope implements Scope
{
    /**
     * The tenant model.
     *
     * @var [type]
     */
    protected $tenant;

    /**
     * Create the scope.
     *
     * @param Model $tenant [description]
     */
    public function __construct(Model $tenant)
    {
        $this->tenant = $tenant;
    }

    /**
     * Apply the scope.
     *
     * @param  Builder $builder [description]
     * @param  Model   $model   [description]
     * @return [type]           [description]
     */
    public function apply(Builder $builder, Model $model)
    {
        return $builder->where($this->tenant->getForeignKey(), '=', $this->tenant->id);
    }
}
