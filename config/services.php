<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'twitter' => [
        'consumer_key' => getenv('5V1E9adYfoKY2sTa1DdRZDNK9 '),
        'consumer_secret' => getenv('E1nCQi0Z8mhZsaQO5ruWQG6UbqWx98DJDVo1cp8wIdRs6vkuD5'),
        'access_token' => getenv('831133079838265345-qhpj1Glr4lYQ9nVpYPV4EfyiYF03Ww6'),
        'access_secret' => getenv('aE9jbAZgoLiaYKDqgZTsoft78SvxcNq9iZlerbk4Kz50Z')
    ],

    'firebase' => [
        'database_url' => 'https://gamerealese.firebaseio.com',
        'secret' => '4xFxq1BtXiGhl64mxcb7cmiTtTBQYhwmLO7930oB',
    ],
];
