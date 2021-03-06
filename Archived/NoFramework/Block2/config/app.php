<?php

/*
Example Get a short name from config
return [
   'name' => [
       'short' => getenv('APP_NAME')
   ]
];
*/

return [
    'name' => env('APP_NAME'),
    'debug' => env('APP_DEBUG', false),

    'providers' => [
        # order registration is very important because for retrieve
        'App\Providers\AppServiceProvider',
        'App\Providers\ViewServiceProvider',
        'App\Providers\DatabaseServiceProvider',
        'App\Providers\SessionServiceProvider',
        'App\Providers\HashServiceProvider',
        'App\Providers\AuthServiceProvider',
        'App\Providers\FlashServiceProvider',
        'App\Providers\CsrfServiceProvider',
        'App\Providers\ValidationServiceProvider',
        'App\Providers\CookieServiceProvider',
        'App\Providers\ViewShareServiceProvider'
     ],

    # middlewares for request
    'middlewares' => [
        'App\Middleware\ShareValidationErrors',
        'App\Middleware\ClearValidationErrors',
        'App\Middleware\Authenticate',
        'App\Middleware\AuthenticateFromCookie',
        'App\Middleware\CsrfGuard'
    ]
];