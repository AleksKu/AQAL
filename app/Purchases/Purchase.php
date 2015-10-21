<?php

namespace AQAL\Purcahses;

use Illuminate\Database\Eloquent\Model;

/**
 * AQAL\Purcahses\Purchase
 *
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
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereStatusId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereWarehouseId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereOrganizationId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereCustomerId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereCustomerName($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereCustomerEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereTotalQty($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Purcahses\Purchase whereDeletedAt($value)
 */
class Purchase extends Model
{
    //
}
