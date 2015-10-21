<?php

use Illuminate\Database\Seeder;

use AQAL\Organizations\Organization;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->delete();

        Organization::create(['title' => 'Aristos','code'=>'aristos']);
        Organization::create(['title' => 'Wma', 'code'=>'wma']);



    }
}
