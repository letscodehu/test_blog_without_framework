<?php

include "master.inc.php";

//which page will be required in @layout.html.php. format: $page.html.php
$page = "article";
$pageTitle = "Article";

$id=1;
if (isset($_GET['id'])){
    $id=$_GET['id'];
}

//query for choosing post - ?=dibi possibility
$sqlPosts = "SELECT * FROM post WHERE id=?";

//writing out selected post
$selectedPost = $database->query($sqlPosts, $id)->fetch();

//writing out comments
$sqlComments = "SELECT comment.* 
                FROM post LEFT JOIN comment ON (post.id = comment.post_id)
                WHERE post.id=?";
$comments = $database->query($sqlComments, $id);




include "templates/@layout.html.php";