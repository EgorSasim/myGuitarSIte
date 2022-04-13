<?php
class GaleryElement
{
    private static $template;
    private $name;
    private $price;
    private $path;

    function __construct($name, $price, $path) {
        if(empty(self::$template)){
            self::$template = file_get_contents("../../Components/Galery/galeryElement.html");
            $name .= "init";
        }

        $this->name = $name;
        $this->path = $path;
    }
    function print_name(){
        return sprintf(self::$template, $this->name, $this->path);
    }
}
?>