<?php
$styles = <<<END

END;
$id = $_GET['id'];
if($id != "374850" || $id != "374853" || $id != "374857"){
    echo "ssssssss";
}

$content = file_get_contents("content.html");
$content = str_replace('{{id}}', $id, $content);

$baseTemplate = file_get_contents("../../Templates/main_template.html");
$baseTemplate = str_replace('{{JSmodules}}', '', $baseTemplate);
$baseTemplate = str_replace('{{Styles}}', $styles, $baseTemplate);
$baseTemplate = str_replace('{{Content}}', $content, $baseTemplate);

echo $baseTemplate;
?>
