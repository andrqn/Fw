<?php

namespace core;

class Application
{
    /**
     * @var null
     */
    private static $instance = null;
    private $__components = [];
    private $pager = null;
    private $template = null;

    private function __construct()
    {
    }

    public function getInstance()
    {
        if (!application::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
