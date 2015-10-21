<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;



class ProductCategory extends Model
{
    public function products () {
        return $this->hasMany(Product::class);
    }
}
