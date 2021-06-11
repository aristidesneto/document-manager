<?php

namespace App\Tenant\Traits;

use App\Models\Tenant;
use App\Tenant\Scope\TenantScope;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasTenant
{
    protected static function booted()
    {
        static::addGlobalScope(new TenantScope);
    }

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}

