<?php

use Illuminate\Database\Seeder;

use AQAL\Stocks\ProductCategory;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('product_categories')->delete();

        ProductCategory::create(['title' => 'Телевизоры']);
        ProductCategory::create(['title' => 'Наушники']);
        ProductCategory::create(['title' => 'Лампы']);
        ProductCategory::create(['title' => 'Блендеры']);
    }
}
