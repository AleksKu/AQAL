<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;


/**
 * AQAL\Stocks\ProductCategory
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|Product[] $products
 * @property integer $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\ProductCategory whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\ProductCategory whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\ProductCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\ProductCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\ProductCategory whereDeletedAt($value)
 */
class ProductCategory extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
