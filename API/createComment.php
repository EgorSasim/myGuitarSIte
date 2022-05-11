<?php
include "../Components/Comment/comment.php";

$dbconn = pg_connect("host=database port=5432 dbname=postgres user=postgres password=12qwasZX")
or die('Не удалось соединиться: ' . pg_last_error());
$res = pg_insert($dbconn, 'comments', $_POST);
?>