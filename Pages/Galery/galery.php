<?php
include "../../Components/SearchUL/listElm.php";
include "../../Components/Galery/galeryElement.php";

$styles = <<<END
    <link rel="stylesheet" href="/Components/SearchUL/coolSearch.css">
    <link rel="stylesheet" href="/Components/Filter/filterNav.css">
    <link rel="stylesheet" href="/Components/Galery/styles.css">
END;

$jsModules = <<<END
    <script src="/Components/SearchUL/coolSearch.js"></script>
    <script src="/Components/Filter/filterNav.js"></script>
END;

$baseTemplate = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Templates/main_template.html");
$baseTemplate = str_replace($_SERVER['REQUEST_URI'].'">', $_SERVER['REQUEST_URI'].'" class="active">', $baseTemplate);

$baseTemplate = str_replace('{{JSmodules}}', $jsModules, $baseTemplate);
$baseTemplate = str_replace('{{Styles}}', $styles, $baseTemplate);

$filter = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Components/SearchUL/template.html");
$list = array(
    (new listElm("#","Adele"))->toStr(),
    (new listElm("#","Adele"))->toStr()
);
$filter = str_replace('{{Values}}', join($list), $filter);

$galery = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Components/Galery/galery.html");
$list = array(
        (new GaleryElement("Guitar 1","","374850"))->print_name(),
        (new GaleryElement("Guitar 2","","374857"))->print_name(),
        (new GaleryElement("Guitar 3","","374853"))->print_name(), 
        (new GaleryElement("Guitar 4","","374850"))->print_name(),
        (new GaleryElement("Guitar 5","","374853"))->print_name(),
        (new GaleryElement("Guitar 6","","374857"))->print_name(),        
);
$galery = str_replace('{{Values}}', join($list), $galery);

$filterNav = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Components/Filter/filterNav.html");



$content = <<<END
<div class="description">
    <h1>Description</h1>
    <p>There you may find a lot of guitar models, check their charactreristic, compare them and finally choose the best guitar for yourself!</p>
</div>
END;
$content .= $filter;
$content .= $galery;
$content .= $filterNav;


$baseTemplate = str_replace('{{Content}}', $content, $baseTemplate);
echo $baseTemplate;
?>