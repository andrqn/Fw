<?php

namespace core;

use traits\Singletone;


class Application
{


    private static $instance = null;

    use Singletone;


    private $__components = [];
    public Page $pager;
    private $template = null;

    private function __construct()
    {
        $this->pager = Page::getInstance();
        $this->template = $_SERVER['DOCUMENT_ROOT'] . '/template/';


    }

    public function startBuffer()
    {
        ob_start();
    }

    public function endBuffer()
    {
        ob_end_clean();
    }

    public function restartBuffer()
    {
        ob_clean();
    }


    public function header()
    {
        $this->startBuffer();
        require $this->template . 'news/header.php';
    }


    public function footer()
    {
        require $this->template . 'news/footer.php';

    }


}