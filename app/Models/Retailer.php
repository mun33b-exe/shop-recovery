<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    protected $fillable = [
        'product_name',
        'product_quantity',
        'price',
        'shopkeeper_id',
    ];

    public function shopkeeper()
    {
        return $this->belongsTo(Shopkeeper::class);
    }
}
