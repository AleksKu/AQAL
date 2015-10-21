<?php

namespace AQAL\Organizations;

use Illuminate\Database\Eloquent\Model;

use AQAL\Stocks\Warehouse;

/**
 * AQAL\Organizations\Organization
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|Warehouse[] $warehouses
 * @property integer $id
 * @property string $title
 * @property string $code
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Organizations\Organization whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Organizations\Organization whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Organizations\Organization whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Organizations\Organization whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Organizations\Organization whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Organizations\Organization whereDeletedAt($value)
 */
class Organization extends Model
{

    /**
     * обновляет плле update_at при обновлении указанных связей
     * @var array
     */
    protected $touches = ['warehouses'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function warehouses()
    {
        return $this->hasMany(Warehouse::class);
    }


    public function defaultWarehouse() {
        return $this->warehouses()->where('is_default_for_organization', 1)->first();
    }
}
