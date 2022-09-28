<?php
namespace core\component;
class Template
{
    private string $__path;
    private string $__relativePath;
    private string $id;
    public array $result;
    public array $params;


    public function __construct(string $id, string $template, string $path)
    {
        $this->id = $id;
        $this->__path = $path . DIRECTORY_SEPARATOR . "templates" .
            DIRECTORY_SEPARATOR . $template . DIRECTORY_SEPARATOR;
    }

}