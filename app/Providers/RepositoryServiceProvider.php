<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {


        $this->app->bind(
            'modules\Customers\Interfaces\CustomerInterface',
            'modules\Customers\Repositories\CustomerRepository',
        );


        $this->app->bind(
            'modules\DataCollection\Interfaces\DataCollectionInterface',
            'modules\DataCollection\Repositories\DataCollectionRepository',
        );

        $this->app->bind(
            'modules\DataProviderX\Interfaces\DataProviderXInterface',
            'modules\DataProviderX\Repositories\DataProviderXRepository',
        );

        $this->app->bind(
            'modules\DataProviderY\Interfaces\DataProviderYInterface',
            'modules\DataProviderY\Repositories\DataProviderYRepository',
        );





    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
