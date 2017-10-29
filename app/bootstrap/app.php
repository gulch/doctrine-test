<?php

define('APP_START', microtime(true));

// error_reporting(E_ALL);

require __DIR__ . '/../../vendor/autoload.php';

// register Dotenv
$dotenv = new Dotenv\Dotenv(__DIR__ . '/../..');
$dotenv->load();

// bootstrap Config
\App\Helpers\Config::bootstrap(__DIR__ . '/../../config');

// bootstrap Logger
require __DIR__ . '/logger.php';

// bootstrap Doctrine ORM
require __DIR__ . '/database.php';

$itemsRepository = $entityManager->getRepository(App\Entities\Article::class);
$item = $itemsRepository->find(4);

echo 'Articles: ' . "\n";
var_dump($item->show());

echo 'Tags: ' . "\n";
foreach ($item->getTags() as $tag) {
    var_dump($tag->show());
}

// create new
/*$newUser = new \App\Entities\User();
$newUser->create(
    'Vovan Kaban',
    'vovan@kaban.com',
    new \DateTime()
);
$entityManager->persist($newUser);
$entityManager->flush();

echo 'new User was created';*/