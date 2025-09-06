<?php

use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

// Force APP_ENV for CLI tests
if (!isset($_SERVER['APP_ENV'])) {
    $_SERVER['APP_ENV'] = 'test';
}

// DEBUG flag
if (!isset($_SERVER['APP_DEBUG'])) {
    $_SERVER['APP_DEBUG'] = 1;
}

if (method_exists(Dotenv::class, 'bootEnv')) {
    (new Dotenv())->bootEnv(dirname(__DIR__).'/.env');
}


