<?php

//nastavenie toho, ze ktoru stranku require v @layout.html.php: *.html.php
if (isset($_GET['page'])){
    $selectedPage = "article";
}