<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = config('app.debug');
$config = Setup::createAnnotationMetadataConfiguration(
    [
        __DIR__ . "/../Entities"
    ],
    $isDevMode
);

$config->setMetadataCacheImpl(
    new Doctrine\Common\Cache\FilesystemCache(__DIR__ . '/../../storage/cache/doctrine2/metadata')
);

// database configuration parameters
$connection = [
    'driver' => config('database.driver'),
    'host' => config('database.host'),
    'user' => config('database.user'),
    'password' => config('database.password'),
    'dbname' => config('database.dbname'),
];

// obtaining the entity manager
$entityManager = EntityManager::create($connection, $config);