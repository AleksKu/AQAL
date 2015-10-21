<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;

/**
 * AQAL\Stocks\StockCharge
 *
 * @property integer $id
 * @property string $code
 * @property integer $documentable_id
 * @property string $documentable_type
 * @property string $desc
 * @property integer $warehouse_id
 * @property integer $organization_id
 * @property float $weight
 * @property float $volume
 * @property float $total
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockCharge whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockCharge whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockCharge whereDocumentableId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockCharge whereDocumentableType($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockCharge whereDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockCharge whereWarehouseId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockCharge whereOrganizationId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockCharge whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockCharge whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockCharge whereTotal($value)
 */
class StockCharge extends Model
{
    //
}
