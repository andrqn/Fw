<?php

namespace core;

use traits\Singletone;


class Application
{


    private static $instance = null;

    use Singletone;


    private $__components = [];
    public Page $pager;
    private $template;
    private Server $server;
    private Request $request;

    private function __construct()
    {
        $this->pager = Page::getInstance();
        $this->template = $_SERVER['DOCUMENT_ROOT'] . '/template/';
        /*$this->server = new Server();
        $this->request = new Request();*/


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
        $this->renderHtml();

    }

    public function getServer()
    {
        return $this->server;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function includeComponent(string $component, string $template, array $params)
    {

    }

    public function renderHtml()
    {
        $content = ob_get_clean();
        $replace = $this->pager->getAllReplace();
        $content = str_replace(array_keys($replace), array_values($replace), $content);
        echo $content;


    }


}