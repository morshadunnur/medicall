<?php
return [
    'user' => [
        'model' => 'App\User',
    ],
    'broadcast' => [
        'enable' => false,
        'app_name' => 'test',
        'driver' => 'pusher',
        'pusher' => [
            'app_id' => env('PUSHER_APP_ID'),
            'app_key' => env('PUSHER_APP_KEY'),
            'app_secret' => env('PUSHER_APP_SECRET'),
            'options' => [
                'cluster' => 'ap2',
                'encrypted' => true
            ]
        ],
    ],
];
