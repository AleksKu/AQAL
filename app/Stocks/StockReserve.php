<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;

class StockReserve extends Model
{

    public function documentable()
    {
        return $this->morphTo();
    }

    public function afterSave(){

    }
}
