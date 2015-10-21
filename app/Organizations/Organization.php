<?php

namespace AQAL\Organizations;

use Illuminate\Database\Eloquent\Model;

use AQAL\Stocks\Warehouse;

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
