<?php

session_start();
require "authentication.php";
require "../master.inc.php";
$login = 0;

//which page will be required in @layout.html.php. format: $page.html.php
$page = "login/editor";
$pageTitle = "login | editor";

$id=1;
if (isset($_GET['id'])){
    $id=$_GET['id'];
}

//query for choosing post - ?=dibi possibility
$sqlPosts = "SELECT * FROM post WHERE id=?";

//writing out selected post
$selectedPost = $database->query($sqlPosts, $id)->fetch();




include "../templates/@layout.html.php";