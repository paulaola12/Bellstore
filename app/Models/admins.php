<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    //
    protected $fillable = [
        'product_name',
        'categorys_id',
        'price',
        'description',
        'picture',
    ];
}
