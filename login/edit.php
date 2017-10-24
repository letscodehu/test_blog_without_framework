<?php
session_start();
require "authentication.php";
require "../master.inc.php";

//is signed-in?
$email = filter_input(INPUT_POST, 'email', FILTER_UNSAFE_RAW);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);

$email = trim($email);
$password = trim($password);

$answer = null;

if (!empty($email) || !empty($password) || authenticate($email , $password) ){
    $_SESSION['user'] = $email;
}

$id=1;
if (isset($_GET['id'])){
    $id=$_GET['id'];
}



//query for all posts
$sql = "SELECT * FROM post ORDER BY created_at";

//writing out all posts - edit
$posts = $database->query($sql);


//which page will be required in @layout.html.php. format: $page.html.php
$login = 0;
$page = "login/edit";
$pageTitle = "Admin | Edit";


include "../templates/@layout.html.php";