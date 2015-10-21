<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;

/**
 * AQAL\Stocks\StockChargeItem
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $stock_id
 * @property float $price
 * @property float $qty
 * @property float $weight
 * @property float $volume
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockChargeItem whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockChargeItem whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockChargeItem whereStockId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockChargeItem wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockChargeItem whereQty($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockChargeItem whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockChargeItem whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockChargeItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockChargeItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockChargeItem whereDeletedAt($value)
 */
class StockChargeItem extends Model
{
    //
}
