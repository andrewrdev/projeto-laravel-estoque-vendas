<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'cost_price',
        'stock_quantity',
        'active'
    ];

    public function saleItems()
    {
        return $this->hasMany(SaleItem::class);
    }
}
