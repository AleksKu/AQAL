<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;

use AQAL\Organizations\Organization;

class Warehouse extends Model
{

    protected $attributes = array(
        'is_default_for_organization' => false,

    );

    protected $casts = [
        'is_default_for_organization' => 'boolean',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
