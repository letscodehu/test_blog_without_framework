<?php


require "admin-master.inc.php";
$isLoggedIn = require "secured.inc.php";

forceAuthenticatedUser();



//query for all posts
$sql = "SELECT * FROM post ORDER BY created_at";

//writing out all posts - edit
$posts = $database->query($sql);



//which page will be required in @layout.html.php. format: $page.html.php
$page = "in/home";
$pageTitle = "Admin | Home";


include "../templates/@layout.html.php";