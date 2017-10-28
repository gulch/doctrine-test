<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(
    [
        __DIR__ . "/../Entities"
    ],
    $isDevMode
);

// database configuration parameters
$connection = [
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/../../storage/db/doctrine-test.sqlite',
];

// obtaining the entity manager
$entityManager = EntityManager::create($connection, $config);