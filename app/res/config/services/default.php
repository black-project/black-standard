<?php

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

// Learn more about services, parameters and containers at
// http://symfony.com/doc/current/book/service_container.html

$container->setParameter(
    "app.controller.default.class", "App\\Controller\\DefaultController"
);

$container
    ->register("app.controller.default", "%app.controller.default.class%")
    ->addArgument(new Reference("templating"));

