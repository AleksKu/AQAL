<?php

namespace AQAL\Stocks;

use AQAL\Stocks\Exceptions\StockException;
use AQAL\Stocks\Repositories\ReserveRepository;
use AQAL\Stocks\Repositories\TransferRepository;
use Illuminate\Database\Eloquent\Model;


use AQAL\Organizations\Organization;

use AQAL\Stocks\Contracts\StockDocument;

/**
 * AQAL\Stocks\StockTransfer
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|StockTransferItem[] $items
 * @property-read Warehouse $targetWarehouse
 * @property-read Warehouse $sourceWarehouse
 * @property-read Organization $targetOrganization
 * @property-read Organization $sourceOrganization
 * @property integer $id
 * @property string $code
 * @property string $desc
 * @property integer $warehouse_from
 * @property integer $warehouse_to
 * @property integer $organization_from
 * @property integer $organization_to
 * @property float $weight
 * @property float $volume
 * @property float $total
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransfer whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransfer whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransfer whereDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransfer whereWarehouseFrom($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransfer whereWarehouseTo($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransfer whereOrganizationFrom($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransfer whereOrganizationTo($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransfer whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransfer whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockTransfer whereTotal($value)
 */
class StockTransfer extends Model implements StockDocument
{


    public static  $codePrefix = 'Трансфер';


    protected $attributes = array(

        'weight' => 0,
        'volume' => 0,
        'total' => 0,
        'is_reserved' => false,
        'is_activated' => false,
    );

    protected $casts = array(


        'is_reserved' => 'boolean',
        'is_activated' => 'boolean',
    );

    public  function codeForLinks($prefix) {
        return $prefix. static::$codePrefix. $this->id;
    }


    public function items() {
        return $this->hasMany(StockTransferItem::class);
    }

    public function targetWarehouse() {
        return $this->belongsTo(Warehouse::class);
    }

    public function warehouse() {
        return $this->targetWarehouse();
    }

    public function organization() {
        return $this->targetOrganization();
    }


    public function sourceWarehouse() {
        return $this->belongsTo(Warehouse::class);
    }

    public function targetOrganization() {
        return $this->belongsTo(Organization::class);
    }

    public function sourceOrganization() {
        return $this->belongsTo(Organization::class);
    }


    /**
     * Пересчитывает вес, объем и стоимость трансфера
     * @return $this
     */
    public function calcTotals() {
        return $this;
    }


    /**
     * Провести документ
     *
     * @return $this
     * @throws StockException
     */
    public function activate() {

        if($this->is_activated)
            throw new StockException('Документ уже проведен');

        if(!$this->is_reserved)
        {
            $rep = new ReserveRepository();
            $rep->createByDocument($this);

        }

        $items = $this->items();

        foreach($items as $item)
        {

            //@todo проверить существование стоков
            $source = $item->sourceStock();
            $target = $item->targetStock();


            $product = $item->product();

            $qty = $item->qty;


            if(!$source->checkAvailable($qty))
                throw new StockException('Недостаточно кол-ва для трансфера');

            $source->decreaseQty($qty);
            $target->increaseQty($qty);


            $source->save();
            $target->save();

        }

        $this->is_activated = true;

        $this->calcTotals();

        $this->save();


        return $this;

    }

}
