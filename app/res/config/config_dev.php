<?php

$loader->import('config.php');

$container->loadFromExtension('framework', [
    'router' => [
        'resource' => "/app/config/routing_dev.php",
        'strict_requirements' => true,
    ],
    'profiler' => [
        'only_exceptions' => false,
    ],
    'translator' => [
        'logging' => true
    ],
]);


$container->loadFromExtension('web_profiler', [
    'toolbar' => true,
    'intercept_redirects' => false,
]);

$container->loadFromExtension('monolog', [
    'handlers' => [
        'main' => [
            'type' => "stream",
            'path' => "%kernel.logs_dir%/%kernel.environment%.log",
            'level' => "debug",
            'channels' => [
                "!event",
            ],
        ],
        'console' => [
            'type' => "console",
            'bubble' => false,
            'verbosity_levels' => [
                'VERBOSITY_VERBOSE' => "INFO",
                'VERBOSITY_VERY_VERBOSE' => "DEBUG",
            ],
            'channels' => [
                "!event",
                "!doctrine",
            ],
        ],
        'console_very_verbose' => [
            'type' => "console",
            'bubble' => false,
            'verbosity_levels' => [
                'VERBOSITY_VERBOSE' => "NOTICE",
                'VERBOSITY_VERY_VERBOSE' => "NOTICE",
                'VERBOSITY_DEBUG' => "DEBUG",
            ],
            'channels' => [
                "!event",
                "!doctrine",
            ],
        ],
    ]
]);

$container->loadFromExtension('swiftmailer', [
    'delivery_address' => "%delivery_address%",
]);
