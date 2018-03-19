<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
     protected static $repositories = [
        'user' => [
            \App\Contracts\UserRepository::class,
            \App\Repositories\UserRepositoryEloquent::class,
        ],
        'booking' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'cinema' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'cinemasystem' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'city' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'comment' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'media' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'movie' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'movietechnology' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'movietype' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'post' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'promotion' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'rating' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'schedule' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'scheduletime' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'technology' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'time' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'trailer' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
         'type' => [
            \App\Contracts\BookingRepository::class,
            \App\Repositories\BookingRepositoryEloquent::class,
        ],
    ];
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        foreach (static::$repositories as $repository) {
            $this->app->singleton(
                $repository[0],
                $repository[1]
            );
        }
    }
}
