<?php
include "../Components/Comment/comment.php";

$guitars = array(
    new CommentJson("The best GUitaR","1200$","374850", "Нормииик")
);

echo json_encode($guitars, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES )

?>