<?php

namespace App\Models;

use App\Models\Base as Model;

class Item extends Model
{
    protected $guarded = ['id'];
    protected $table = "item";
}
