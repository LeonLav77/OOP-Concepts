<?php

namespace App\Providers;

use App\DBAccessors\MySQLDB;
use App\DBAccessors\SQLiteDB;
use App\Contracts\DatabaseContract;
use Illuminate\Support\ServiceProvider;

class DBServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DatabaseContract::class, function ($app) {
        if (env('TEST_DB') == 'MySQL') {
            return new MySQLDB(env('TEST_DB'));
        }else{
            return new SQLiteDB(env('TEST_DB'));
        }
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
