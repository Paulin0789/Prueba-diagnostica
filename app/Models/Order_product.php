<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    protected $table = 'order_product';
    protected $primaryKey = 'id';
    protected $fillable = [
        'count',
        'subtotal'
    ];
    //
}