<?php
$email = trim($email);
$password = trim($password);

$answer = null;

if (!empty($email) || !empty($password) || authenticate($email , $password) ){
    $_SESSION['user'] = $email4;
}


