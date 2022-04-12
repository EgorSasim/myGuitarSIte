<?php
class listElm
{
    private $name;
    private $href;
    private $tag = 'li';

    function __construct(string $href,string $name) {
        $this->name = $name;
        $this->href = $href;
    }
    function toStr(): string{
        //$str = "<div class=\"gridItem\">{$this->name}</div>";
        $str = "<{$this->tag}><a href=\"{$this->href}\">{$this->name}</a></{$this->tag}>";
        return $str;
    }
}
?>