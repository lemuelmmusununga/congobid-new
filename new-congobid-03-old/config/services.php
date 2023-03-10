<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
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
    'google' => [
        'client_id' => env(key:'229234100549-24f1ivbe6l8i2naub3bkc30rms9op8ds.apps.googleusercontent.com'),
        'client_secret' => env(key:'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'),
        'redirect' => 'http://localhost/congobid-rdc/congobid/login/google/callback',
    ],
    'facebook' => [
        'client_id' => env(key:'455760276247788'),
        'client_secret' => env(key:'7acd4a7ed2705701bff344e90e4e0ebd'),
        'redirect' => 'http://localhost/congobid-rdc/congobid/public/facebook/callback',
    ],

];
