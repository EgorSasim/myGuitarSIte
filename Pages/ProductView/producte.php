<?php
$styles = <<<END

END;
$id = $_GET['id'];
if($id != 374850 or $id != 37453 or $id != 374857){
    header("Location: /Pages/ErrorPage/404.php");
    exit;
}

$content = file_get_contents("content.html");
$content = str_replace('{{id}}', $id, $content);

$baseTemplate = file_get_contents("../../Templates/main_template.html");
$baseTemplate = str_replace('{{JSmodules}}', '', $baseTemplate);
$baseTemplate = str_replace('{{Styles}}', $styles, $baseTemplate);
$baseTemplate = str_replace('{{Content}}', $content, $baseTemplate);

echo $baseTemplate;
?>
