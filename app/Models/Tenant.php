<?php

namespace App\Models;

use App\Tenant\TenantManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tenant extends TenantManager
{
    use HasFactory;
}
