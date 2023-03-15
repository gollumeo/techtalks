<?php

return [

    'default' => env('BROADCAST_DRIVER', 'null'),

    'connections' => [

        'my-websocket-server' => [
            'driver' => 'socket.io',
            'host' => '127.0.0.1',
            'port' => 8080,
            'namespace' => 'App\Events',
        ],

    ],

];
