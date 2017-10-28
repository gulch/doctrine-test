<?php

// setup logger
$logger = new \Monolog\Logger('Doctrine Test App', [
    new \Monolog\Handler\StreamHandler(__DIR__ . '/../../storage/logs/' . date('Ymd') . '.log'),
]);

// register exceptions handler
\Monolog\ErrorHandler::register($logger);