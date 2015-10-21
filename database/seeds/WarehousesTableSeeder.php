<?php

use Illuminate\Database\Seeder;

use AQAL\Stocks\Warehouse;

class WarehousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouses')->delete();

        Warehouse::create(['title' => 'Основной склад','code'=>'aristos_main_house','organization_id'=>1]);
        Warehouse::create(['title' => 'Склад Oursson', 'code'=>'oursson_house','organization_id'=>1]);



    }
}
