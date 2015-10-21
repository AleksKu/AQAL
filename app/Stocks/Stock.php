<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;



use AQAL\Organizations\Organization as Organization;


class Stock extends Model
{



    protected $attributes = array(
        'qty' => 0,
        'available' => 0,
        'reserved' => 0,
        'min_qty' => 0,
        'ideal_qty' => 0,
        'weight' => 0,
        'volume' => 0
    );

    public function product() {

        return $this->belongsTo(Product::class);
    }

    public function warehouse() {
        return $this->belongsTo(Warehouse::class);
    }


    public function organization() {
        return $this->belongsTo(Organization::class);
    }

    public function scopeOfProduct($query, Product $product)
    {
        return $query->whereProductId($product->id);
    }







}
