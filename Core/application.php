<?php

namespace Fw\core;

class Application
{
    private $__components = [];
    private $pager = null;
    private $instance = null;
    private $template = null;

    private function __construct()
    {
    }

    public function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}