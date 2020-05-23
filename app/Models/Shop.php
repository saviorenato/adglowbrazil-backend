<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $casts = [
        'attributes' => 'array'
    ];
    protected $fillable = [
        'name'
    ];
}
