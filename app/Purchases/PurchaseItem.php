<?php

namespace AQAL\Purchases;

use Illuminate\Database\Eloquent\Model;

/**
 * AQAL\Purchases\PurchaseItem
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $purchase_id
 * @property integer $stock_id
 * @property float $price
 * @property float $qty
 * @property float $total
 * @property float $weight
 * @property float $volume
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purchases\PurchaseItem whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purchases\PurchaseItem whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purchases\PurchaseItem wherePurchaseId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purchases\PurchaseItem whereStockId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purchases\PurchaseItem wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purchases\PurchaseItem whereQty($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purchases\PurchaseItem whereTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purchases\PurchaseItem whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purchases\PurchaseItem whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purchases\PurchaseItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purchases\PurchaseItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purchases\PurchaseItem whereDeletedAt($value)
 */
class PurchaseItem extends Model
{
    //
}
