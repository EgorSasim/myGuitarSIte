<?php 
include "../Components/Galery/galeryElement.php";

$guitars = array(
    new GuitarJson("The best GUitaR","1200$","374850"),
    new GuitarJson("NOrm","600$","374853"),
    new GuitarJson("JOPA","JOPA","374857"),
    new GuitarJson("Guitar 1","800$","374850"),
    new GuitarJson("Govno_deshowoe","5$","374853"),
);

echo json_encode($guitars, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES )
?>