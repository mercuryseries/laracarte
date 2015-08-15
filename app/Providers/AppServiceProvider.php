<?php

namespace Laracarte\Providers;

use AnthonyMartin\GeoLocation\GeoLocation as GeoLocation;
use Illuminate\Support\ServiceProvider;
use Laracarte\Exceptions\InvalidAddressException;
use Laracarte\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Set user's longitude and latitude on saving (update and create)
        User::saving(function ($user) {
            try {
                $response = GeoLocation::getGeocodeFromGoogle($user->address);
                $user->latitude = $response->results[0]->geometry->location->lat;
                $user->longitude = $response->results[0]->geometry->location->lng;
            } catch (\Exception $e) {
                throw new InvalidAddressException("It seems that your address is missing or invalid. Please don't forget to set it on your Github profile if you are using Github Authentication.");
                // return false;
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
