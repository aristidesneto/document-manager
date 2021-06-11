<?php

namespace App\Tenant\Scope;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class TenantScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        // $tenant = Tenant::currentTenant();

        // dd($tenant);
        // if (! is_null($tenant)) {
        //     $builder->where('tenant_id', $model->tenant_id);
        // }

    }
}
