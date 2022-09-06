<?php

/*namespace Fw\Core\Config;*/

class Config
{
    private $config;


    public function __construct()
    {
        $this->config = require_once dirname('Fw') . DIRECTORY_SEPARATOR . 'config.php';
    }


    public function getConfig(string $path)
    {
        if (empty($path)) {
            return "Path not found";
        } else {
            return explode("/", $path);
        }
    }
}


