<?php
session_start();
require "authentication.php";

/*is signed-in?
if (!empty($_POST['email']) && $_POST['email'] == "timea@gmail.com" && $_POST['password'] == "secretpassword"){

}
//  header("Location:edit.php");
*/



//which page will be required in @layout.html.php. format: $page.html.php
$login = 0;
$page = "login/home";
$pageTitle = "Admin | Login";


include "../templates/@layout.html.php";