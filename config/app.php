<?php

use App\ServiceProviders\ExceptionsServiceProvider;
use App\ServiceProviders\RouteServiceProvider;

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
        RouteServiceProvider::class,
    ]

];
