<?php
class GaleryElement
{
    private $name;
    private $price;
    private $path;

    function __construct($name, $price, $path) {
        $this->name = $name;
        $this->path = $path;
    }
    function print_name(){
        $str = <<<END
            <div class="gridItem">
                <img src="{$this->path}">

            </div>
END;
        return $str;
    }
}
?>