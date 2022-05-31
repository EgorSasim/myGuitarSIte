<?php
$id = $_GET["id"];

$dbconn = pg_connect("host=database port=5432 dbname=postgres user=postgres password=12qwasZX")
or die('Не удалось соединиться: ' . pg_last_error());

$sql = "SELECT about, text, preview, date FROM comments WHERE product_id=".$id;

$result = pg_query($dbconn, $sql);
$arr = pg_fetch_all($result);
echo json_encode($arr, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES )
?>