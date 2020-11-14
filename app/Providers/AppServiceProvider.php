<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Character;
use App\Observers\CharacterObserver;
use App\Models\Transaction;
use App\Observers\TransactionObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Character::observe(CharacterObserver::class);
        Transaction::observe(TransactionObserver::class);
    }
}
