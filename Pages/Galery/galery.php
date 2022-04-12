<?php
$styles = '<link rel="stylesheet" href="/styles/main.css">';
$jsModules <<<END
    <script src="../../Components/filterNav.js"></script>
END;

$baseTemplate = file_get_contents("../../Templates/main_template.html");

$baseTemplate = str_replace('{{JSmodules', '<script src="../scripts/filterNav.js"></script>', $baseTemplate);
$baseTemplate = str_replace('{{Styles}}', $styles, $baseTemplate);
$baseTemplate = str_replace('{{Content}}', file_get_contents("content.html"), $baseTemplate);
echo $baseTemplate;
?>