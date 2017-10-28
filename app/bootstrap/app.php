<?php

define('APP_START', microtime(true));

error_reporting(E_ALL);

require __DIR__ . '/../../vendor/autoload.php';

// bootstrap Logger
require __DIR__ . '/logger.php';

// bootstrap Doctrine ORM
require __DIR__ . '/database.php';

$usersRepository = $entityManager->getRepository(App\Entities\User::class);
$users = $usersRepository->findAll();

foreach ($users as $user) {
    echo $user->show();
}

// create new
$newUser = new \App\Entities\User();
$newUser->create(
    'Vovan Kaban',
    'vovan@kaban.com',
    new \DateTime()
);
$entityManager->persist($newUser);
$entityManager->flush();

echo 'Created new User';