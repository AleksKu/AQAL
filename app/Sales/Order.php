<?php

namespace AQAL\Sales;

use Illuminate\Database\Eloquent\Model;

/**
 * AQAL\Sales\Order
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Photo[] $photos
 * @property integer $id
 * @property string $code
 * @property integer $status_id
 * @property integer $warehouse_id
 * @property integer $organization_id
 * @property integer $customer_id
 * @property string $customer_name
 * @property string $customer_email
 * @property float $weight
 * @property float $volume
 * @property float $total_qty
 * @property float $total
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereStatusId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereWarehouseId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereOrganizationId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereCustomerId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereCustomerName($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereCustomerEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereTotalQty($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Sales\Order whereDeletedAt($value)
 */
class Order extends Model
{
    public function photos()
    {
        return $this->morphMany('App\Photo', 'imageable');
    }

}
