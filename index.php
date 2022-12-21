<?php

require_once "controler/GameControler.php";
$gameControler = new GameControler;

define("URL" , str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http") . 
"://".$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ));

if (empty($_GET['page'])) {
    require_once "view/home_view.php";
}else {
    $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
    switch ($url[0]) {
        case 'accueil': require_once "view/home_view.php";
        break;
        case 'heros' : require_once "view/heroes_view.php";
    }
}