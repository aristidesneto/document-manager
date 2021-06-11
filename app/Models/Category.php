<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Tenant\Traits\HasTenant;

class Category extends Model
{
    use HasFactory;
    use HasTenant;

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }
}
