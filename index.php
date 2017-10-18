<?php

require "main.inc.php";


//query pre vyber prvych 3 postov
$sql = <<<SQL
SELECT *
FROM post
ORDER BY created_at 
LIMIT 3
SQL;

$post = $database->query($sql);


//nastavenie toho, ze ktoru stranku require v @layout.html.php: *.html.php
$selectedPage = "home";


include "templates/@layout.html.php";