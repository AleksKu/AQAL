<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;




class Product extends Model
{
    public function category () {
        return $this->belongsTo(ProductCategory::class);
    }

    public function stocks () {
        return $this->hasMany(Stock::class);
    }




}
