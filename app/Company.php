<?php

namespace App;

use App\Tenant\Traits\ForTenants;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
