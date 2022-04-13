<?php
$style = '<link rel="stylesheet" href="/Pages/ErrorPage/styles.css">';
    
$baseTemplate = file_get_contents("../../Templates/main_template.html");

$baseTemplate = str_replace('{{JSmodules}}', '', $baseTemplate);
$baseTemplate = str_replace('{{Styles}}', $style, $baseTemplate);
$baseTemplate = str_replace('{{Content}}', file_get_contents("content.html"), $baseTemplate);
echo $baseTemplate;
?>