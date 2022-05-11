<?php
include "../Components/Comment/comment.php";

$id = $_GET["id"];

$guitars = array(
    new CommentJson("The best GUitaR",$id,"374850", "Нормииик")
);

echo json_encode($guitars, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES )

?>