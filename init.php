<?php



spl_autoload_register(function (string $class) {
    echo "try load $class" . PHP_EOL;
    $path = __DIR__ . "/../{$class}" . ".php";
    if (file_exists($path)) {
        require_once $path;
    }
});

session_start();



