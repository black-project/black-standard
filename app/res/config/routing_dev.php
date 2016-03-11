<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$wdt = $loader->import("/symfony/web-profiler-bundle/config/routing/wdt.xml", "xml");
$wdt->addPrefix("/_wdt");

$profiler = $loader->import("/symfony/web-profiler-bundle/config/routing/profiler.xml", "xml");
$profiler->addPrefix("/_profiler");

$errors = $loader->import("/symfony/twig-bundle/config/routing/errors.xml", "xml");
$errors->addPrefix("/_errors");

$routing = $loader->import("/app/config/routing.php");

$collection->addCollection($wdt);
$collection->addCollection($profiler);
$collection->addCollection($errors);
$collection->addCollection($routing);

return $collection;
