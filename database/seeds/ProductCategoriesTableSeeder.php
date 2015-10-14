<?php

use Illuminate\Database\Seeder;

use Kazna\Category;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('categories')->delete();

        Category::create(['title' => 'Телевизоры']);
        Category::create(['title' => 'Наушники']);
        Category::create(['title' => 'Лампы']);
        Category::create(['title' => 'Блендеры']);
    }
}
