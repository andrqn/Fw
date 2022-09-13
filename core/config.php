<?php

namespace core;

class Config
{
    private static $config;

    public function __construct()
    {
    }

    static function load()
    {
        static::$config = require_once 'config.php';
    }

    static function get(string $path)
    {
        Config::load();
        if (empty($path)) {
            return "Path not found";
        } else {
            $path = explode("/", $path);
            return static::$config[$path[0]][$path[1]];
        }
    }


}


