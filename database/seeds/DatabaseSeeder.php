<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        $this->call('ProductCategoriesTableSeeder');
        $this->command->info('Таблица категорий товаров загружена данными!');

        $this->call('ProductsTableSeeder');
        $this->command->info('Таблица товаров загружена данными!');

        $this->call('OrganizationsTableSeeder');
        $this->command->info('Таблица организаций загружена данными!');


        $this->call('WarehousesTableSeeder');
        $this->command->info('Таблица складов загружена данными!');

        Model::reguard();
    }
}
