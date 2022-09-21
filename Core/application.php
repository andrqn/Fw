<?php

namespace Fw\core;

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
        if (!Application::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}