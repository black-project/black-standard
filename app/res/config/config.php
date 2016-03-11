<?php

// Parameters
$loader->import('parameters.php');
$loader->import('security.php');
$loader->import('services/default.php');

// Framework configuration
$container->loadFromExtension('framework', [
    'esi' => [
        'enabled' => true,
    ],
    'translator' => [
        'fallback' => [
            "%locale%"
        ],
    ],
    'secret' => "%secret%",
    'router' => [
        'resource' => "/app/config/routing.php",
    ],
    'templating' => [
        'engines' => [
            "twig",
        ],
    ],
    'http_method_override' => true,
]);

// Twig configuration
$container->loadFromExtension('twig', [
    'debug' => "%kernel.debug%",
    'strict_variables' => "%kernel.debug%",
    'form_themes' => [
        "bootstrap_3_layout.html.twig",
    ],
]);

// Doctrine configuration
$container->loadFromExtension('doctrine', [
    'dbal' => [
        'driver' => "pdo_mysql",
        'host' => "%database_host%",
        'port' => "3306",
        'dbname' => "%database_name%",
        'user' => "%database_user%",
        'password' => "%database_password%",
        'charset' => "UTF8",
        'default_table_options' => [
            'charset' => "utf8mb4",
            'collate' => "utf8mb4_unicode_ci",
            'engine' => "InnoDB",
        ],
    ],
    'orm' => [
        'auto_generate_proxy_classes' => "%kernel.debug%",
        'naming_strategy' => "doctrine.orm.naming_strategy.underscore",
        'auto_mapping' => true,
        'mappings' => [
            'entity' => [
                'type' => "yml",
                'dir' => "%kernel.root_dir%/config/doctrine/entity",
                'prefix' => "App\\Entity",
                'alias' => "Entity",
                'is_bundle' => false,
            ],
        ],
    ],
]);

// Swiftmailer Configuration
$container->loadFromExtension('swiftmailer', [
    'transport' => "%mailer_transport%",
    'host' => "%mailer_host%",
    'username' => "%mailer_user%",
    'password' => "%mailer_password%",
    'spool' => [
        'type' => "memory",
    ],
]);

// FrameworkExtra Configuration
$container->loadFromExtension('sensio_framework_extra', [
    'router' => [
        'annotations' => false,
    ],
    'view' => [
        'annotations' => false,
    ],
    'cache' => [
        'annotations' => false,
    ],
    'security' => [
        'annotations' => false,
    ],
]);
