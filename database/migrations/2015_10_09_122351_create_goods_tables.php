<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categories', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');

            $table->timestamps();
            $table->softDeletes();

        });

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', array('product', 'service','digital'));
            $table->string('sku');
            $table->index('sku');

            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->string('title');
            $table->longText('description')->nullable();

            // $table->integer('vat_id')->unsigned(); //налог

            $table->integer('unit_id')->unsigned()->nullable(); //базовая едениу

            $table->json('barcodes')->nullable();
            $table->json('attributes')->nullable();

            $table->decimal('weight', 10, 2)->nullable()->unsigned();
            $table->decimal('volume', 10, 2)->nullable()->unsigned();

            $table->string('image')->nullable();

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
        Schema::drop('products');

        Schema::drop('categories');

    }
}
