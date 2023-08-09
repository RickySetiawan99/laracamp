<?php

return [

    'merchant_id'   => env('MIDTRANS_MERCHANT_ID'),
    'client_key'    => env('MIDTRANS_CLIENTKEY'),
    'server_key'    => env('MIDTRANS_SERVERKEY'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION'),
    'is_sanitized'  => env('MIDTRANS_IS_SANITIZED'),
    'is_3ds'        => env('MIDTRANS_IS_3DS'),

];