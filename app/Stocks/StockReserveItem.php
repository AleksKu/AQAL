<?php

namespace AQAL\Stocks;

use AQAL\Stocks\StockDocumentItem;
use Illuminate\Database\Eloquent\Model;

/**
 * AQAL\Stocks\StockReserveItem
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $stock_id
 * @property integer $reserve_id
 * @property float $price
 * @property float $qty
 * @property float $weight
 * @property float $volume
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read Product $product
 * @property-read StockReserve $reserve
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserveItem whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserveItem whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserveItem whereStockId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserveItem whereReserveId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserveItem wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserveItem whereQty($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserveItem whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserveItem whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserveItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserveItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserveItem whereDeletedAt($value)
 */
class StockReserveItem extends StockDocumentItem
{

    protected $table = 'stock_reserve_items';

    protected $with = ['product'];

    protected $touches = ['stock'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function document()
    {
        return $this->belongsTo(StockReserve::class);
    }




    /**
     * Проводит строки документа -
     * резервирует сток
     * @return $this
     */
    public function activate()
    {
        $stock = $this->stock;
        $qty = $this->qty;

        $stock->reserveQty($qty);
        $stock->save();

        return $this;

    }

    /**
     * Снимает резерв товара -
     * резервирует сток
     * @return $this
     */
    public function complete()
    {
        $stock = $this->stock;
        $qty = $this->qty;

        $stock->removeReserveQty($qty);
        $stock->save();

        return $this;

    }


}
