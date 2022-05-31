<?php

$link_re = "/https?:\/\/(?:www\.)?(?:\d|\w)+\.[a-z]{2,4}\b((?:\d|\w|\/)*)/";

function handler(array $matches): string{
    if(preg_match("/www\.bsuir\.by/", $matches[0])){
        return $matches[0];
    }else{
        return "[Link deleted]";
    }
}

$dbconn = pg_connect("host=database port=5432 dbname=postgres user=postgres password=12qwasZX")
or die('Не удалось соединиться: ' . pg_last_error());
$body = file_get_contents('php://input');
$body = json_decode($body, true);
$body["text"] = preg_replace_callback($link_re, "handler", $body["text"]);

echo $body;

$res = pg_insert($dbconn, 'comments', $body);
?>