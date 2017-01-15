<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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

    'paypal' => [
        'client_id' => 'AdIluQtjZNZuQLMz2VMDX3HC9EMr7kG4-BPU8IXxKIBW_lWSaexy8Wp9BSC4Z5hf4goKvfukxUrIoaTf',
        'secret' => 'EGZ9bMgB53fkmd8G7ykBs6JC0DFLRe63CjIrcVEOmuswzD_-WG1C6EmEN0PuVuYpq3s90k8ObYK0hwTq',


    ],


];
