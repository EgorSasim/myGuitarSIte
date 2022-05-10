<?php
class GaleryElement
{
    private static $template;
    private $name;
    private $price;
    private $id;

    function __construct($name, $price, $id) {
        if(empty(self::$template)){
            self::$template = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Components/Galery/galeryElement.html");
        }

        $this->name = $name;
        $this->id = $id;
    }
    function print_name(){
        return sprintf(self::$template, $this->name, $this->id);
    }
}

class GuitarJson{
    public static $path = '/assets/imgs/guitars/%1$s.jpg';

    public $name;
    public $price;
    public $picture;
    public $id;

    public function __construct($name, $price, $id) {
        $this->price = $price;
        $this->name = $name;
        $this->id = $id;

        $this->picture = sprintf(self::$path, $this->id);
    }
}
?>