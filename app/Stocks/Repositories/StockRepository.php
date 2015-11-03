<?php
/**
 * Created by PhpStorm.
 * User: newage
 * Date: 20.10.15
 * Time: 21:14
 */

namespace AQAL\Stocks\Repositories;


use AQAL\Stocks\StockTransfer;
use AQAL\Stocks\StockTransferItem;
use \Illuminate\Support\Facades\DB as DB;

use AQAL\Repositories\AbstractRepository;

use AQAL\Organizations\Organization;

use AQAL\Stocks\Warehouse;
use AQAL\Stocks\Stock;

use AQAL\Stocks\Product;

use AQAL\Stocks\Exceptions\StockAlreadyExists;
use AQAL\Stocks\Exceptions\StockNotFound;
use AQAL\Stocks\Exceptions\StockException;


class StockRepository extends AbstractRepository
{
    public function __construct(Stock $stock = null)
    {
        $this->model = $stock;

    }


    /**
     * Создает сток для товара на указанном складе
     * @param Warehouse $warehouse
     * @param Product $product
     * @return Stock
     * @throws \Exception
     */

    public function createStockForWarehouse(Warehouse $warehouse, Product $product)
    {

        $stock = $this->findStockByProductAndWarehouse($product, $warehouse);

        if (!empty($stock)) {
            throw new StockAlreadyExists();
        }

        $stock = new Stock();
        $stock->product()->associate($product);
        $stock->warehouse()->associate($warehouse);
        $stock->organization()->associate($warehouse->organization);
        $stock->save();

        return $stock;


    }


    /**
     * @param Product $product
     * @param Warehouse $warehouse
     * @return Stock
     */
    public function findStockByProductAndWarehouse(Product $product, Warehouse $warehouse)
    {
        return $stock = $warehouse->stocks()->ofProduct($product)->first();
    }


    /**
     * Создает стоки для товара, на всех складах, указанной организации
     *
     * @param Organization $organization
     * @param Product $porduct
     * @return array
     * @throws \Exception
     */

    public function createStockForAllWarehousesInOrganization(Organization $organization, Product $product)
    {
        $stocks = [];
        $warehouses = $organization->warehouses();

        DB::transaction(function () use ($warehouses, $product) {
            foreach ($warehouses as $warehouse) {

                $stocks[] = $this->createForWarehouse($warehouse, $product);
            }
        });


        return $stocks;
    }



    /**
     * зарезервировать товар
     *
     * @todo реализовать пересчет веса и объема
     */
    /*    public function reserve(Stock $stock, $reserveQty =1, $document = null)  {

            $qty = $stock->qty;
            $reservedOld = $stock->reserved;
            $availible = $stock->availible;

            if($reserveQty> $availible)
                throw new Exception('Не достаточно кол-ва на складе для резерва');

            $availible = $availible-$reserveQty;
            $reserved = $reservedOld + $reserveQty;

            $reserve = new StockReserve();
            $reserve->warehouse_id = $stock->warehouse_id;
            $reserve->organization_id = $stock->organization_id;



        }*/

}