<?php

    return [
        'production' => env('MIDTRANS_PRODUCTION', true),
        'server_key' => env('MIDTRANS_SERVER_KEY', ''),
        'client_key' => env('MIDTRANS_CLIENT_KEY', ''),
        'sanitize' => env('MIDTRANS_SANITIZED', true),
        '3DS' => env('MIDTRANS_3DS', true),
        'channel' => [
            'mandiri' => [
                'label' => 'Mandiri',
                'activate' => env('MIDTRANS_MANDIRI', true)
            ],
            'bca' => [
                'label' => 'BCA',
                'activate' => env('MIDTRANS_BCA', true)
            ],
            'permata' => [
                'label' => 'Permata',
                'activate' => env('MIDTRANS_PERMATA', true)
            ],
            'bni' => [
                'label' => 'BNI',
                'activate' => env('MIDTRANS_BNI', true)
            ]
        ]
    ];
