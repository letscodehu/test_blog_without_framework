<?php
session_start();
require "authentication.php";





//which page will be required in @layout.html.php. format: $page.html.php
$login = 0;
$page = "login/logout";
$pageTitle = "Admin | Logout";


include "../templates/@layout.html.php";


