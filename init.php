<?php


spl_autoload_register(function (string $class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $path = __DIR__ ."\\". "{$class}" . ".php";
    if (file_exists($path)) {
        require_once $path;
    }
});

session_start();



