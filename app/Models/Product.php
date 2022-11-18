<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'barcode',
        'resale_price',
        'wholesale_price',
        'purchase_price',
        'price',
        'vendor',
        'quantity',
        'status'
    ];
}
