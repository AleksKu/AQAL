<?php

namespace AQAL\Stocks;

use Illuminate\Database\Eloquent\Model;

use AQAL\Organizations\Organization;

/**
 * AQAL\Stocks\Warehouse
 *
 * @property-read Organization $organization
 * @property-read \Illuminate\Database\Eloquent\Collection|Stock[] $stocks
 * @property integer $id
 * @property string $title
 * @property string $code
 * @property boolean $is_default_for_organization
 * @property integer $organization_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Warehouse whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Warehouse whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Warehouse whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Warehouse whereIsDefaultForOrganization($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Warehouse whereOrganizationId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Warehouse whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Warehouse whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Warehouse whereDeletedAt($value)
 */
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
