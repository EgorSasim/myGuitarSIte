<?php


$dbconn = pg_connect("host=database port=5432 dbname=postgres user=postgres password=12qwasZX")
or die('Не удалось соединиться: ' . pg_last_error());

$styles = <<<END
    <link rel="stylesheet" href="/Pages/ProductView/styles.css">
    <link rel="stylesheet" href="/Components/Comment/comment.css">
END;
$js_modules = '<script src="/Pages/ProductView/scripts.js"></script>';


$id = $_GET["id"];
$sql = "SELECT name, description FROM products WHERE id=".$id;
$result = pg_query($dbconn, $sql);
$arr = pg_fetch_array($result);

if($arr == false){
    header("Location: /Pages/ErrorPage/404.php");
    exit;
}

$sql = "SELECT image FROM images WHERE product_id=".$id;
$result = pg_query($dbconn, $sql);
$imgs = pg_fetch_all($result);
$slides = array();

for($i = 0; $i<count($imgs); $i++){
    $slides[$i] = "<div class=\"column\"><img class=\"demo cursor\" src=".$imgs[$i]["image"]." style=\"width:100%\" onclick=\"currentSlide(".($i+1).")\"></div>";
    $imgs[$i]   = "<div class=\"mySlides\"><img src=".$imgs[$i]["image"]."></div>";
}

$tags = array(
    "<li>Electro</li>",
    "<li>V-strat</li>",
    "<li>6-strings</li>",
    "<li>Red</li>",
    "<li>Cort</li>",
);


$content = file_get_contents("content.html");
$content = str_replace('{{Slides}}', join($imgs), $content);
$content = str_replace('{{Images}}', join($slides), $content);

$content = str_replace('{{id}}', $id, $content);
$content = str_replace('{{Guitar_name}}', $arr["name"], $content);
$content = str_replace('{{Description}}', $arr["description"], $content);
$content = str_replace('{{Tags}}', join($tags), $content);

$baseTemplate = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Templates/main_template.html");
$baseTemplate = str_replace('{{JSmodules}}', $js_modules, $baseTemplate);
$baseTemplate = str_replace('{{Styles}}', $styles, $baseTemplate);
$baseTemplate = str_replace('{{Content}}', $content, $baseTemplate);
$baseTemplate = str_replace('{{self_path}}', $_SERVER['REQUEST_URI'], $baseTemplate);

$baseTemplate = str_replace('{{product_id}}', $id, $baseTemplate);

echo $baseTemplate;
?>