<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\HasUuid;

class Base extends Model
{
    use HasFactory, SoftDeletes, HasUuid;

    public function scopeFindByUuid($query, $uuid)
    {
        return $query->where('uuid', $uuid);
    }
}
