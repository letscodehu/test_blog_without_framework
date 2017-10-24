<?php

require "admin-master.inc.php";
$isLoggedIn = require "secured.inc.php";


logOut();
redirect('../index.php');
