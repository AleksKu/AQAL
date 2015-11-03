<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;
use AQAL\Stocks\Contracts\StockDocumentItem;

/**
 * AQAL\Stocks\StockTransferItem
 *
 * @property-read StockTransfer $transfer
 * @property-read Product $product
 * @property-read Stock $stock
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
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransferItem whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransferItem whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransferItem whereStockId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransferItem wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransferItem whereQty($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransferItem whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransferItem whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransferItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransferItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransferItem whereDeletedAt($value)
 * @property integer $transfer_id
 * @property-read Stock $sourceStock
 * @property-read Stock $targetStock
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransferItem whereTransferId($value)
 */
class StockTransferItem extends Model implements StockDocumentItem
{


    protected $touches = ['transfer'];

    protected $with = ['product'];

    public function transfer()
    {
        return $this->belongsTo(StockTransfer::class);
    }

    public function document()
    {
        return $this->transfer();
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public function sourceStock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function targetStock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function populateByDocumentItem(StockDocumentItem $documentItem)
    {
        // TODO: Implement populateByDocumentItem() method.
    }
}
