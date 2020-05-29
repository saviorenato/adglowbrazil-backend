<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaing extends Model
{
    protected $fillable = [
        'id',
        'id_shop',
        'id_master_campaing',
        'budget_value',
        'enabled'
    ];
}
