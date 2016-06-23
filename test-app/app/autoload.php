<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

$symfonyVersion = getenv('SYMFONY_VERSION');
if (!$symfonyVersion) {
    throw new \Exception('SYMFONY_VERSION environment variable must be set');
}

require __DIR__.'/../../vendor/autoload.php';

$loader = require __DIR__.'/../vendor-symfony-' . $symfonyVersion .'/autoload.php';

AnnotationRegistry::registerLoader([$loader, 'loadClass']);
