<?php

use core\Application;


if (!defined("CORE")) {
    define("CORE", true);
}



spl_autoload_register(function (string $class) {
    $path = __DIR__ . "/../{$class}" . ".php";
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $path = __DIR__ . "\\" . "{$class}" . ".php";

    if (file_exists($path)) {
        require_once $path;
    }
});

session_start();

$app = Application::getInstance();




