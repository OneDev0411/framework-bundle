<?php

$container->loadFromExtension('framework', [
    'serializer' => true,
    'messenger' => [
        'serializer' => true,
        'transports' => [
            'default' => 'amqp://localhost/%2f/messages',
            'customised' => [
                'dsn' => 'amqp://localhost/%2f/messages?exchange_name=exchange_name',
                'options' => ['queue' => ['name' => 'Queue']],
            ],
        ],
    ],
]);
