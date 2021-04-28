<?php

use Aws\Laravel\AwsServiceProvider;

return [
    'region' => env('AWS_REGION', 'us-east-1'),
    'version' => 'latest',
    'ua_append' => [
        'L5MOD/' . AwsServiceProvider::VERSION,
    ],
];
