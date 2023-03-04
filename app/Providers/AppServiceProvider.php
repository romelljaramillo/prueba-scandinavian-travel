<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->singleton('GuzzleHttp\Client', function(){
            $credentials = base64_encode(env('SCANDINAVIAN_API_USER', 'user') .':' . env('SCANDINAVIAN_API_PASS', 'password') ) ;
            $token = env('SCANDINAVIAN_API_TOKEN', 'token');
            
            return new Client([
                'base_uri' => 'https://practical-neumann.62-151-178-253.plesk.page/api/',
                'curl'   => [CURLOPT_SSL_VERIFYPEER => false ],
                'verify' => false,
                'headers' => [
                    'Authorization' => "Basic {$credentials},Bearer {$token}",
                    'Accept' => 'application/json',
                    'Accept-Language' => 'application/json'
                ]
            ]);
        });
    }
}