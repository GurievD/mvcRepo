<?php

use App\ServiceProviders\DatabaseServiceProvider;
use App\ServiceProviders\ExceptionsServiceProvider;
use App\ServiceProviders\RouteServiceProvider;
use App\ServiceProviders\ViewServiceProvider;

return [

    'name' => 'MVC',
    'debug' => true,
    'auth' => [
        'admin' => [
            'username' => 'Hello world!'
        ]
    ],

    'providers' => [
        ExceptionsServiceProvider::class,
        ViewServiceProvider::class,
        DatabaseServiceProvider::class,
        RouteServiceProvider::class,
    ]

];