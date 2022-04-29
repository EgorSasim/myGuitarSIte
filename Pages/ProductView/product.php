<?php

$styles = <<<END
    <link rel="stylesheet" href="/Pages/ProductView/styles.css">
    <link rel="stylesheet" href="/Components/Comment/comment.css">
END;
$js_modules = '<script src="/Pages/ProductView/scripts.js"></script>';

$id = $_GET['id'];
if(!in_array($id, array(374850, 374853, 374857))){
    header("Location: /Pages/ErrorPage/404.php".$id);
    exit;
}

$tags = array(
    "<li>Electro</li>",
    "<li>V-strat</li>",
    "<li>6-strings</li>",
    "<li>Red</li>",
    "<li>Cort</li>",
);

$guitar_name = "Guitar name";
$desc = "Descrsdas Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis maiores explicabo, repudiandae, dolorum sequi accusamus laudantium, enim ut recusandae sapiente corporis corrupti incidunt consequatur! Maxime ab ipsum ut corrupti.
<br> more place in the end, fill it later";

$content = file_get_contents("content.html");

$content = str_replace('{{id}}', $id, $content);
$content = str_replace('{{Guitar_name}}', $guitar_name, $content);
$content = str_replace('{{Description}}', $desc, $content);
$content = str_replace('{{Tags}}', join($tags), $content);

$baseTemplate = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Templates/main_template.html");
$baseTemplate = str_replace('{{JSmodules}}', $js_modules, $baseTemplate);
$baseTemplate = str_replace('{{Styles}}', $styles, $baseTemplate);
$baseTemplate = str_replace('{{Content}}', $content, $baseTemplate);

echo $baseTemplate;
