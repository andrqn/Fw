<?php
namespace core\component;
abstract class Base
{
    public array $result;
    public string $id;
    public Template $template;
    public array $params;
    public string $__path;
    public function __construct(string $id,string $template,array $params)
    {
        $this->id = $id;
        $this->__path = __DIR__;
        $this->template = new Template($id, $template, $this->__path);
        $this->params = $params;

    }



}