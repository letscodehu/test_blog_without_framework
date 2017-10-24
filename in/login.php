<?php

$isLoggedIn = require "secured.inc.php";
require "admin-master.inc.php";


/*is signed-in?
if (!empty($_POST['email']) && $_POST['email'] == "timea@gmail.com" && $_POST['password'] == "secretpassword"){

}
//  header("Location:edit.php");
*/

if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
    if (authenticate($_REQUEST['email'], $_REQUEST['password'])) {
        redirect('index.php');
    }

}


//which page will be required in @layout.html.php. format: $page.html.php
$page = "in/login";
$pageTitle = "Admin | Login";


include "../templates/@layout.html.php";