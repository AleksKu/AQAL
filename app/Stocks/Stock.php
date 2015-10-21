<?php

namespace AQAL\Stocks;

use AQAL\Stocks\Exceptions\StockException;
use Illuminate\Database\Eloquent\Model;



use AQAL\Organizations\Organization as Organization;


/**
 * AQAL\Stocks\Stock
 *
 * @property-read Product $product
 * @property-read Warehouse $warehouse
 * @property-read Organization $organization
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock ofProduct($product)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock ofWarehouse($warehouse)
 * @property integer $id
 * @property integer $product_id
 * @property string $stock_code
 * @property string $stock_box
 * @property integer $warehouse_id
 * @property integer $organization_id
 * @property float $qty
 * @property float $reserved
 * @property float $available
 * @property float $min_qty
 * @property float $ideal_qty
 * @property float $total
 * @property float $weight
 * @property float $volume
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereStockCode($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereStockBox($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereWarehouseId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereOrganizationId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereQty($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereReserved($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereAvailable($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereMinQty($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereIdealQty($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\Stock whereDeletedAt($value)
 */
class Stock extends Model
{



    protected $attributes = array(
        'qty' => 0,
        'available' => 0,
        'reserved' => 0,
        'min_qty' => 0,
        'ideal_qty' => 0,
        'weight' => 0,
        'volume' => 0
    );

    public function product() {

        return $this->belongsTo(Product::class);
    }

    public function warehouse() {
        return $this->belongsTo(Warehouse::class);
    }


    public function organization() {
        return $this->belongsTo(Organization::class);
    }

    public function scopeOfProduct($query, Product $product)
    {
        return $query->whereProductId($product->id);
    }


    public function scopeOfWarehouse($query, Warehouse $warehouse)
    {
        return $query->whereWarehouseId($warehouse->id);
    }


    public function setQtyAttribute() {

    }




    /**
     * Проверяет доступно ли запрашиваемое кол-во товара
     * @param $qty
     * @return bool
     */
    public function checkAvailable($qty)
    {
        if($this->available > $qty)
            return true;

        return false;
    }



    /**
     * Пересчитывает доступное кол-во, на основании обзего кол-ва на складе и резервов
     * @return $this
     */
    public function calcAvailable() {

        $this->available = $this->qty - $this->reserved;

        return $this;
    }

    /**
     * @todo написать реализацию метода calcTotals
     * Пересчитывает общую стоимость товаров на складе, объем и вес
     * @return $this
     */

    public function calcTotals() {

        return $this;
    }


    /**
     *
     * Уменьшает кол-во товара на складе
     * @param $qty
     * @return $this
     * @throws StockException
     */
    public function decreaseQty($qty)
    {
        if($this->qty< $qty)
        {
            throw new StockException('Не достаточно товара для списания');
        }

        $this->qty -= $qty;

        $this->calcAvailable();
        $this->calcTotals();

        return $this;
    }

    /**
     *
     * Увеличивает кол-во товара на складе
     * @param $qty
     * @return $this
     */
    public function increaseQty($qty)
    {
        $this->qty += $qty;

        $this->calcAvailable();
        $this->calcTotals();
        return $this;
    }









}
