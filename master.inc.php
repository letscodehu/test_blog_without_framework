<?php
/**
 * Created by PhpStorm.
 * User: timeavass
 * Date: 18/10/2017
 * Time: 22:18
 */

require "vendor/autoload.php";

//pripojenie na databazu
$options = [
    'driver' => 'mysqli',
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'blog',
];
$database = new Dibi\Connection($options);