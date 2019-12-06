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
        'client_id' => '509569862974863',
        'client_secret' => 'fcc92441aa1a83ac469c4c2148bede3a',
        'redirect' => 'http://digitalmee.dhalumnos.com/auth/facebook/callback'
    ],
    'google' => [ 
        'client_id' => '677202711621-4f57j28b0qiglcp42997jrg36d04rdps.apps.googleusercontent.com', 
        'client_secret' => 'eNGMIlCq1jKhc9Taar7ae5d2', 
        'redirect' => 'http://digitalmee.dhalumnos.com/auth/google/callback'
    ]
];