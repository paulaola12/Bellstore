<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'product_name',
        'quantity',
        'price',
        'picture',
    ];
}
