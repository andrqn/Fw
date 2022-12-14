<?php

namespace core;

use traits\Singletone;

class Page
{
    private array $property;
    private array $srcContainer;
    private array $cssContainer;
    private array $stringContainer;
    use Singletone;

    public function __construct()
    {

    }

    public function addJs(string $src)
    {
        $this->srcContainer['src'] = "<script src='{$src}'></script>";
        $this->srcContainer = array_unique($this->srcContainer);

    }

    public function addCss(string $link)

    {
        $this->cssContainer['link'] = "<link rel='stylesheet' href='{$link}'>";
        $this->cssContainer = array_unique($this->cssContainer);

    }

    public function addString(string $str)
    {
        $this->stringContainer['str'] = "$str";
        $this->stringContainer = array_unique($this->stringContainer);

    }

    public function setProperty(string $id, $value)
    {
        $this->property["$id"] = $value;

    }

    public function getProperty(string $id)
    {
        return $this->property["$id"];

    }

    public function showProperty(string $id)
    {
        echo $this->property["$id"];

    }

    public function getAllReplace(): array
    {
        $replaceContainer = [];
        $replaceContainer = array_merge($this->srcContainer, $this->cssContainer, $this->stringContainer);
        return $replaceContainer;

    }

    public  function showHead()
    {
        echo $this->srcContainer['src'] . "\n";
        echo $this->cssContainer['link'] . "\n";
        echo $this->stringContainer['str'] . "\n";

    }

}