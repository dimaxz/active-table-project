<?php

define("BASEPATH", realpath(__DIR__ . '/../'));

require_once BASEPATH . '/vendor/autoload.php';

(new \Project\Application\Controllers\Home(
    new \Project\Infrastructure\User\UserRepository()
))->index();

echo PHP_EOL;