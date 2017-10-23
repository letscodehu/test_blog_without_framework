<?php

require "master.inc.php";

//query pre vypis 1 postu
$allPosts = <<<SQL
SELECT *
FROM post
ORDER BY created_at
SQL;

$onePost = $database->query($allPosts)->fetch();


//nastavenie toho, ze ktoru stranku require v @layout.html.php: *.html.php
$selectedPage = "post";


include "templates/@layout.html.php";