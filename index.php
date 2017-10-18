<?php

require "vendor/autoload.php";

//pripojenie na databazu
$options = [
        'driver' => 'mysqli',
        'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'blog',
];
$database = new Dibi\Connection($options);

//query pre vyber prvych 3 postov
$sql = <<<SQL
SELECT *
FROM post
ORDER BY created_at 
LIMIT 3
SQL;

$post = $database->query($sql);

$rootDir = "MAMP/blog/";

//nastavenie toho, ze ktoru stranku require v @layout.html.php: *.html.php
$selectedPage = "home";


include "templates/@layout.html.php";