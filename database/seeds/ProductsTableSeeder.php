<?php

use Illuminate\Database\Seeder;

use AQAL\Stocks\Product;
use AQAL\Stocks\Stock;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

      $product = new Product(
            [
                'title' => 'Телевизор Philips 234/rt',
                'description'=>'хороший тв',
                'type' => 'product',
                'sku' => '234/rt',
                'weight' => 20.1,
                'volume' => 2,
                'unit_id' =>1


            ]
        );

        $product->category()->associate(1);

        $product->save();


        $stock = new Stock(
            [

            ]

        );



        $product2 = new Product(
            [
                'title' => 'Наушники Philips Gd809/12',
                'description'=>'хороший наушник',
                'type' => 'product',
                'sku' => 'Gd809/12',
                'weight' => 0.8,
                'volume' => 1,
                'unit_id' =>1


            ]
        );

        $product2->category()->associate(2);

        $product2->save();


    }
}
