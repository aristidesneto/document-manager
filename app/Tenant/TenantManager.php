<?php

namespace App\Tenant;

use Illuminate\Database\Eloquent\Model;

class TenantManager extends Model
{
    protected static $currentTenant;

    public static function setCurrentTenant(self $tenantManager): void
    {
        self::$currentTenant = $tenantManager;
    }

    public static function currentTenant()
    {
        if (empty(self::$currentTenant)) {
            return self::currentTenantByLoggedUser();
        }

        return self::$currentTenant;
    }

    public static function currentTenantByLoggedUser()
    {
        if (!app('auth')->check()) {
            return self::$currentTenant;
        }

        return self::$currentTenant = auth()->user()->tenant;
    }
}
