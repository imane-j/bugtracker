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
        'client_id' => '864866935361-kt2ebauk3lh02jo45t412gk9q8gbre3q.apps.googleusercontent.com',
        'client_secret' => '5rFVKZJuSOVaeMDKjduJfbfX',
        'redirect' => 'http://127.0.0.1:8000/callback/google',
    ],
    
    'heroku' => [
        'client_id' => env('HEROKU_KEY'),
        'client_secret' => env('HEROKU_SECRET'),
        'redirect' => env('HEROKU_REDIRECT_URI')
    ],

];
