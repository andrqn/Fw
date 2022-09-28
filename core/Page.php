<?php

namespace core;

use traits\Singletone;

class Page
{
    private array $property;
    private const JS = "#SRC#";
    private const CSS = "#CSS#";
    private const STR = "#STR#";
    use Singletone;

    public function __construct()
    {

    }

    public function addJs(string $src)
    {
        $this->srcContainer[self::JS] = "<script src=$src></script>";
        $this->srcContainer = array_unique($this->srcContainer);

    }

    public function addCss(string $link)

    {
        $this->cssContainer[self::CSS] = "<link rel='stylesheet' href=$link>";
        $this->cssContainer = array_unique($this->cssContainer);

    }

    public function addString(string $str)
    {
        $this->stringContainer[self::STR] = "$str";
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

        $replaceContainer = array_merge($this->srcContainer, $this->cssContainer, $this->stringContainer);
        return $replaceContainer;

    }

    public static function showHead()
    {
        echo self::JS . "\n";
        echo self::CSS . "\n";
        echo self::STR . "\n";

    }

}