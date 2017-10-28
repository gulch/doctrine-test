<?php

define('APP_START', microtime(true));

//error_reporting(E_ALL);

require __DIR__ . '/../../vendor/autoload.php';

// bootstrap Logger
require __DIR__ . '/logger.php';

echo 'Works!';