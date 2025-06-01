<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shopkeeper extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    public function retailers()
    {
        return $this->hasMany(Retailer::class);
    }
}
