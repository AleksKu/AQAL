<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;


/**
 * AQAL\Stocks\Product
 *
 * @property-read ProductCategory $category
 * @property-read \Illuminate\Database\Eloquent\Collection|Stock[] $stocks
 */
class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }


}
