<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('app_default', new Route('/', [
    '_controller' => "app.controller.default",
], [], [], '', [], ['GET']));

return $collection;
