<?php

// To get started with security, check out the documentation:
// http://symfony.com/doc/current/book/security.html

$container->loadFromExtension('security', [
    'providers' => [
        'in_memory' => [
            'memory' => [],
        ],
    ],
    'firewalls' => [
        'dev' => [
            'pattern' => "^/(_(profiler|wdt)|css|images|js)/",
            'security' => false,
        ],
        'main' => [
            'anonymous' => [],
        ],
    ],
    'access_control' => [

    ],
]);
