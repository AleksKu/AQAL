<?php

namespace AQAL\Stocks;

use AQAL\Stocks\Contracts\StockDocumentItem;
use Illuminate\Database\Eloquent\Model;

/**
 * AQAL\Stocks\StockExpenseItem
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
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpenseItem whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpenseItem whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpenseItem whereStockId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpenseItem wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpenseItem whereQty($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpenseItem whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpenseItem whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpenseItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpenseItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpenseItem whereDeletedAt($value)
 * @property integer $expense_id
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockExpenseItem whereExpenseId($value)
 */
class StockExpenseItem extends Model implements StockDocumentItem
{
    //
    public function product()
    {
        // TODO: Implement product() method.
    }

    public function document()
    {
        // TODO: Implement document() method.
    }

    public function populateByDocumentItem(StockDocumentItem $documentItem)
    {
        // TODO: Implement populateByDocumentItem() method.
    }
}
