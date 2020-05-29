<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsumedBudget extends Model
{
    protected $fillable = [
        'id',
        'id_budgets',
        'consumed_budget'
    ];
}
