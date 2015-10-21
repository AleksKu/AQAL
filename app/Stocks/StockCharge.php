<?php

namespace AQAL\Stocks;

use AQAL\Stocks\Contracts\StockDocument;
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
class StockCharge extends Model implements StockDocument
{
    //
    public function activate()
    {
        // TODO: Implement activate() method.
    }

    public function warehouse()
    {
        // TODO: Implement warehouse() method.
    }

    public function organization()
    {
        // TODO: Implement organization() method.
    }

    public function items()
    {
        // TODO: Implement items() method.
    }

    public function codeForLinks($prefix)
    {
        // TODO: Implement codeForLinks() method.
    }

    public function populateByDocument(StockDocument $document)
    {
        // TODO: Implement populateByDocument() method.
    }
}
