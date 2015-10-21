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
use AQAL\Stocks\Warehouse;
use AQAL\Stocks\StockTransfer;
use AQAL\Stocks\StockTransferItem;

use AQAL\Stocks\ProductQtyCollection;



use AQAL\Stocks\Exceptions\StockNotFound;
use AQAL\Stocks\Exceptions\StockException;


class TransferRepository extends AbstractRepository
{

    protected $stockRepository;

    public function __construct(Stock $stock = null, StockRepository $stockRepository = null)
    {
        $this->model    = $stock;
        $this->stockRepository = $stockRepository;

    }


    /**
     *
     * Создает новый трансфер с указанным списком товаров, но не проводит его
     * Если указанно, то создает резерв товара
     *
     * @param ProductQtyCollection $collection
     * @param Warehouse $source
     * @param Warehouse $target
     * @param boolean $reserve //зарезервировать товары?
     * @return StockTransfer
     */
    public function createTransfer(ProductQtyCollection $collection, Warehouse $source,  Warehouse $target, $reserve = false) {



        if($source->organization()->id != $target->organization()->id)
        {
            throw new StockException('Для перемещения между организациями, используйте метод StockRepository::createOrganisationsTransfer');
        }

        $transfer = new StockTransfer();

        $organization = $source->organization();

        $transfer->sourceOrganization()->associate($organization);
        $transfer->targetOrganization()->associate($organization);

        $transfer->sourceWarehouse()->associate($source);
        $transfer->targetWarehouse()->associate($target);

        $transfer->save();



        foreach($collection as $row)
        {
            $productId = $row['id'];
            $qty = $row['qty'];

            $product = Product::findOrFail($productId);

            $stock = $this->stockRepository->findStockByProductAndWarehouse($product, $source);

            if(empty($stock))
                throw new StockNotFound();


            $item = new StockTransferItem();
            $item->product()->associate($product);
            $item->stock()->associate($stock);
            $item->setQty($qty);


            $item->save();



        }

        if($reserve === true)
        {
            $transfer->is_reserved = true;
            $rep = new ReserveRepository();
            $rep->createByDocument($transfer);
        }


        return $transfer;
    }
}