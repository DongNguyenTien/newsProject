<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    //

    public function price_conditions()
    {
        return $this->hasMany('App\Models\ProductPriceCondition', 'price_id', 'id');
    }
}
