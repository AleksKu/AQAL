<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;

/**
 * AQAL\Stocks\StockExpense
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
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpense whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpense whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpense whereDocumentableId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpense whereDocumentableType($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpense whereDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpense whereWarehouseId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpense whereOrganizationId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpense whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpense whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpense whereTotal($value)
 */
class StockExpense extends Model
{
    //
}
