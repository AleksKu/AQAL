<?php

namespace AQAL\Stocks;

use AQAL\Organizations\Organization;
use Illuminate\Database\Eloquent\Model;

/**
 * AQAL\Stocks\StockReserve
 *
 * @property-read \ $documentable
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
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereDocumentableId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereDocumentableType($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereWarehouseId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereOrganizationId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereDeletedAt($value)
 */
class StockReserve extends Model
{

    public static $codePrefix = 'Отгрузка';

    public function documentable()
    {
        return $this->morphTo();
    }


    public function warehouse() {
        return $this->belongsTo(Warehouse::class);
    }

    public function organization() {
        return $this->belongsTo(Organization::class);
    }

}
