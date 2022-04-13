<?php
$styles = '<link rel="stylesheet" href="/Pages/ProductView/styles.css">';

$id = $_GET['id'];
if(!in_array($id, array(374850, 374853, 374857))){
    header("Location: /Pages/ErrorPage/404.php".$id);
    exit;
}

$content = file_get_contents("content.html");
$content = str_replace('{{id}}', $id, $content);

$baseTemplate = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Templates/main_template.html");
$baseTemplate = str_replace('{{JSmodules}}', '', $baseTemplate);
$baseTemplate = str_replace('{{Styles}}', $styles, $baseTemplate);
$baseTemplate = str_replace('{{Content}}', $content, $baseTemplate);

echo $baseTemplate;
?>
