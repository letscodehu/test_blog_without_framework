<?php
/**
 * Created by PhpStorm.
 * User: timeavass
 * Date: 24/10/2017
 * Time: 00:49
 */
//functions.php
function authenticate($email, $password){

    $file = fopen('login.data.csv', 'r');

    while (!feof($file)){
        $data = fgetcsv($file);
        if($data[0] == $email && $data[1] == $password){
            return true;
        }
    }
    return false;
}

function loggedIn(){
    return !empty($_SESSION['user']);
}