<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    //

    protected $fillable = [
        'payment_id',
        'first_name',
        'last_name',
        'product_name',
        'amount',
        'payment_status',
        'reference'
    ];

    
    
}
