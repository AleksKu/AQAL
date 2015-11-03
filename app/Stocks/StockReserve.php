<?php

namespace AQAL\Stocks;





/**
 * AQAL\Stocks\StockReserve
 *
 * @property-read \ $documentable
 * @property integer $id
 * @property string $code
 * @property integer $documentable_id
 * @property string $documentable_type
 * @property string $desc
 * @property integer $warehouse_id
 * @property integer $organization_id
 * @property float $weight
 * @property float $volume
 * @property float $total
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereDocumentableId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereDocumentableType($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereWarehouseId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereOrganizationId($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereTotal($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\AQAL\Stocks\StockReserve whereDeletedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|StockReserveItem[] $items
 * @property-read Warehouse $warehouse
 * @property-read Organization $organization
 */
class StockReserve extends  StockDocument
{


    protected $table = 'stock_reserves';

    public static $codePrefix = 'Резерв';



    public function items()
    {
        return $this->hasMany(StockReserveItem::class);
    }




    /**
     * Заполняет поля на основании документа
     * @param StockDocument $document
     */
    public function populateByDocument(StockDocument $document)
    {
        $this->warehouse()->associate($document->warehouse);
        $this->organization()->associate($document->organization);
        $this->documentable()->associate($document);

        $this->code = $document->codeForLinks(StockReserve::$codePrefix);

    }


    public function codeForLinks($prefix)
    {
        // TODO: Implement codeForLinks() method.
    }




}
