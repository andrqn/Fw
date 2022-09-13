<?php

namespace core;

class Application
{
<<<<<<< HEAD

=======
   
>>>>>>> 859c78d46d0a810665b99d05a653b26430770b06
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
