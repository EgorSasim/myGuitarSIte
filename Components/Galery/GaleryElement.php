<?php namespace base;
class GaleryElement
{
    private $name;
    function __construct($name) { $this->name = $name; }
    function print_name(){
        $str = "<div class=\"gridItem\">{$this->name}</div>";
        return $str;
    }
}
?>