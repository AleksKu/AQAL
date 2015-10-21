<?php
/**
 * Created by PhpStorm.
 * User: newage
 * Date: 21.10.15
 * Time: 15:06
 */

namespace AQAL\Stocks\Providers;

use Illuminate\Support\ServiceProvider;

use AQAL\Stocks\Stock;


class StockServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \AQAL\Stocks\Repositories\StockRepository::class
        );

        $this->app->bind(
            \AQAL\Stocks\Repositories\TransferRepository::class
        );

        $this->app->bind(
            \AQAL\Stocks\Repositories\ReserveRepository::class
        );



    }

    public function boot() {

    }
}