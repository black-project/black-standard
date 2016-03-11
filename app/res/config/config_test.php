<?php

$loader->import('config_dev.php');

$container->loadFromExtension('framework', [
    'test' => true,
    'session' => [
        'storage_id' => "session.storage.mock_file",
    ],
    'profiler' => [
        'collect' => false,
    ],
]);

$container->loadFromExtension('web_profiler', [
    'toolbar' => false,
    'intercept_redirects' => false,
]);

$container->loadFromExtension('swiftmailer', [
    'disable_delivery' => true,
]);
