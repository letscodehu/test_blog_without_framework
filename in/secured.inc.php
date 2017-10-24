<?php
/**
 * Created by PhpStorm.
 * User: timeavass
 * Date: 24/10/2017
 * Time: 00:49
 */

session_start();
//functions.php


function isLoggedIn()
{
    return isset($_SESSION['user']);
}

function checkLoginCredentials($email, $password){

    $file = fopen('in.data.csv', 'r');

    while (!feof($file)){
        $data = fgetcsv($file);

        if(( $data[0] === $email ) && isset($data[1]) && ( $data[1] === $password )){
            return true;
        }
    }
    return false;
}

function logOut(){
    //unset cookie-client side or session -server side!!
    //setcookie($name, null, (time()-3600);

    $_SESSION['user'] = null;
}

function authenticate($email, $password){
    $email = trim($email);
    $password = trim($password);

    if (checkLoginCredentials($email , $password) ){
        $_SESSION['user'] = $email;
        return true;
    }

    return false;
}

function forceAuthenticatedUser()
{
    if (! isLoggedIn()) {
        redirect('login.php');
    }
}


return isLoggedIn();