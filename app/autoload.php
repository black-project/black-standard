<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

$loader->addClassMap([
    'Puli\\GeneratedPuliFactory' => __DIR__.'/../.puli/GeneratedPuliFactory.php',
]);

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
