<?php
spl_autoload_register(function ($className) {
    $className    = str_replace('\\', '/', $className);
    $fileFullPath = APP_DIR . "/{$className}.php";

    if (file_exists($fileFullPath) === true) {
        require $fileFullPath;
    }
});

require APP_DIR . '/../vendor/autoload.php';
require 'global_functions.php';

$dotenv = Dotenv\Dotenv::createImmutable(APP_DIR . '/../');
$dotenv->load();