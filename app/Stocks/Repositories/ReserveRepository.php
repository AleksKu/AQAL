<?php
/**
 * Created by PhpStorm.
 * User: newage
 * Date: 21.10.15
 * Time: 15:11
 */

namespace AQAL\Stocks\Repositories;


use AQAL\Repositories\AbstractRepository;

use AQAL\Stocks\Stock;
use AQAL\Stocks\Contracts\StockDocument;
use AQAL\Stocks\StockReserve;
use AQAL\Stocks\StockReserveItem;
use AQAL\Stocks\Warehouse;
use AQAL\Stocks\StockTransfer;
use AQAL\Stocks\StockTransferItem;

use AQAL\Stocks\ProductQtyCollection;

use AQAL\Stocks\Exceptions\StockNotFound;
use AQAL\Stocks\Exceptions\StockException;


class ReserveRepository extends AbstractRepository
{

    protected $stockRepository;

    public function __construct(Stock $stock = null, StockRepository $stockRepository = null)
    {
        $this->model    = $stock;
        $this->stockRepository = $stockRepository;

    }


    /**
     *
     * Создает резерв на основании документа
     * @param StockDocument $document
     * @return StockReserve
     */

    public function createByDocument(StockDocument $document) {


        $reserve = new StockReserve();
        $reserve->warehouse()->associate($document->warehouse);
        $reserve->organization()->associate($document->organization);
        $reserve->documentable()->associate($document);

        $reserve->code = $document->codeForLinks(StockReserve::$codePrefix);

        $reserve->save();


        $items = $document->items();

        foreach($items as $item)
        {
            $reserveItem = new StockReserveItem();
            $reserveItem->product()->associate($item->product);
            $reserveItem->reserve()->associate($reserve);
            $reserveItem->qty = $item->qty();
            $reserveItem->save();


        }

        return $reserve;

    }


}