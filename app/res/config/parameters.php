<?php

$parameters = [
    'database_host' => "localhost",
    'database_name' => "www",
    'database_user' => "www-nfw",
    'database_password' => "root",
    'mailer_transport' => "mail",
    'mailer_host' => "127.0.0.1",
    'mailer_user' => null,
    'mailer_password' => null,
    'secret' => "ThisAintAnotherTRDRProjectChangeIt",
    'debug_toolbar' => true,
    'debug_redirects' => false,
    'delivery_address' => "alexandre@lablackroom.com",
    'monolog_from_email' => "monolog@www.standard.blackroom.blackroom",
    'monolog_to_email' => "alexandre@lablackroom.com",
    'monolog_subject' => "Monolog from www.standard.blackroom project",
    'locale' => "en",
];

foreach ($parameters as $key => $value) {
    $container->setParameter($key, $value);
}
