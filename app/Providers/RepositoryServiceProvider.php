<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\AdviceRepository;
use App\Interfaces\AdviceRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AdviceRepositoryInterface::class, AdviceRepository::class);
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
