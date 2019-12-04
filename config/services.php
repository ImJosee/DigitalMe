<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],
    'facebook' => [
        'client_id' => '505763956696457',
        'client_secret' => '77fdb44d1817afd244426d6098578b1e',
        'redirect' => 'http://localhost:8000/auth/facebook/callback'
    ],
    'google' => [ 
        'client_id' => '270968845993-sshbovcue8kg0gt1u0flmlkgva0lflia.apps.googleusercontent.com', 
        'client_secret' => 'DNClAaPNcvC3J56v-9D4UbB_', 
        'redirect' => 'http://localhost:8000/auth/google/callback'
    ]
];