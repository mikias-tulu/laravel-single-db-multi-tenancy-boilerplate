<?php

namespace App\Tenant\Observers;

use Illuminate\Database\Eloquent\Model;

class TenantObserver
{
    /**
     * The tenant model.
     *
     * @var [type]
     */
    protected $tenant;

    /**
     * Create the observer.
     *
     * @param Model $tenant [description]
     */
    public function __construct($tenant)
    {
        $this->tenant = $tenant;
    }

    /**
     * When creating.
     *
     * @param  Model  $model [description]
     * @return [type]        [description]
     */
    public function creating(Model $model)
    {
        $foreignKey = $this->getForeignKey();

        if (!isset($model->{$foreignKey})) {
            $model->setAttribute($foreignKey, $this->tenant->id);
        }
    }

    /**
     * Get foreign key.
     *
     * @return [type] [description]
     */
    protected function getForeignKey()
    {
        return $this->tenant->getForeignKey();
    }
}