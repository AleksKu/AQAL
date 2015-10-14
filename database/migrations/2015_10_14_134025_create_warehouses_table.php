<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->string('code');
            $table->unique('code');

            $table->boolean('is_default_for_organisation')->default(false);

            $table->integer('organisation_id')->unsigned();
            $table->foreign('organisation_id')->references('id')->on('organizations');

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('warehouses');
    }
}
