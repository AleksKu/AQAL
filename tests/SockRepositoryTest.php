<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SockRepositoryTest extends TestCase
{

    use DatabaseMigrations;




    public function testCreateForWarehouse()
    {

        $rep = new AQAL\Repositories\StockRepository();

        $product =  factory(AQAL\Product::class)->create();

        $warehouse = factory(AQAL\Warehouse::class)
            ->create()
            ->each(function($warehouse) {
                $warehouse->organization()->associate();
            });



        $stock = $rep->createForWarehouse($warehouse, $product);

    }
}
