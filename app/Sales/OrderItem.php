<?php

namespace AQAL\Sales;

use Illuminate\Database\Eloquent\Model;

/**
 * AQAL\Sales\OrderItem
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $order_id
 * @property integer $stock_id
 * @property float $price
 * @property float $qty
 * @property float $total
 * @property float $weight
 * @property float $volume
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\OrderItem whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\OrderItem whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\OrderItem whereOrderId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\OrderItem whereStockId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\OrderItem wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\OrderItem whereQty($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\OrderItem whereTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\OrderItem whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\OrderItem whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\OrderItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\OrderItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\OrderItem whereDeletedAt($value)
 */
class OrderItem extends Model
{
    //
}
