<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;

/**
 * AQAL\Stocks\StockReserveItem
 *
 */
class StockReserveItem extends Model
{
    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function reserve() {
        return $this->belongsTo(StockReserve::class);
    }
}
