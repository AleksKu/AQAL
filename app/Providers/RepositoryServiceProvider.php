<?php
namespace AQAL\Providers;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \AQAL\Repositories\StockRepository::class
        );

    }
}