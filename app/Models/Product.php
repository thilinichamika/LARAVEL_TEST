<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
            'sku_id',
            'sku_code',
            'sku_name',
            'mrp',
            'price',
            'weight',
            'volume'
    ];
}
