<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Tenant\Traits\HasTenant;

class Department extends Model
{
    use HasFactory;
    use HasTenant;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
