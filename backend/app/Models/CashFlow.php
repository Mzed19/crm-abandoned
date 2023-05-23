<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashFlow extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'value',
        'material_id',
        'service_order_id',
        'payment_type',
        'flow_type',
        'date',
        'description'
    ];
}
