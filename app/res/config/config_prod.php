<?php

$loader->import('config.php');

$container->loadFromExtension('monolog', [
    'handlers' => [
        'main' => [
            'type' => "fingers_crossed",
            'action_level' => "error",
            'handler' => "grouped"
        ],
        'grouped' => [
            'type' => "group",
            'members' => [
                "nested",
                "buffered"
            ],
        ],
        'nested' => [
            'type' => "stream",
            'path' => "%kernel.logs_dir%/%kernel.environment%.log",
            'level' => "debug",
        ],
        'console' => [
            'type' => "console",
        ],
        'buffered' => [
            'type' => "buffer",
            'handler' => "swift",
        ],
        'swift' => [
            'type' => "swift_mailer",
            'from_email' => "%monolog_from_email%",
            'to_email' => "%monolog_to_email%",
            'subject' => "%monolog_subject%",
            'level' => "debug",
        ],
    ],
]);
