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

$dbconn = pg_connect("host=database port=5432 dbname=postgres user=postgres password=12qwasZX")
or die('Не удалось соединиться: ' . pg_last_error());

$sql = "SELECT id, name, preview FROM products";

$result = pg_query($dbconn, $sql);
$arr = pg_fetch_all($result);

for($i = 0; $i<count($arr); $i++){
    $arr[$i] = "<div class=\"gridItem\"><a href=\"/Pages/ProductView/product.php?id=".$arr[$i]["id"]."\" class=\"gridItemContent\"><img src=".$arr[$i]["preview"]."><div><p>".$arr[$i]["name"]."</p></div></a></div>";
}

$galery = str_replace('{{Values}}', join($arr), $galery);

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