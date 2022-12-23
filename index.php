<?php

require_once "01_controler/GameControler.php";
$gameControler = new GameControler;
define("URL" , str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http") . 
"://".$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ));

if (empty($_GET['page'])) {
    require_once "03_view/home_view.php";
}else {
    $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
    switch ($url[0]) {
        case 'accueil': require_once "03_view/home_view.php";
        break;
        case 'heros' :
            if(empty($url[1])){
                 $gameControler->displayHeroes();
            }
            else if($url[1] === "add"){
                $gameControler->newHeroForm();
            }
            else if($url[1] === "gvalid") {
                $gameControler->newHeroValidation();
            }
            else if($url[1] === "edit"){
                $gameControler->editHeroForm($url[2]);
            }
            else if($url[1] === "editvalid") {
                $gameControler->editHeroValidation();
            }
            else if($url[1] === "delete"){
                $gameControler->deleteHero($url[2]);
            }
        break;
        case 'maps' :
            if(empty($url[1])) {
                $gameControler->displayMaps();
            }
            else if($url[1] === "add"){
                $gameControler->newMapForm();
            }
            else if($url[1] === "gvalid") {
                $gameControler->newMapValidation();
            }
            else if($url[1] === "edit"){
                $gameControler->editMapForm($url[2]);
            }
            else if($url[1] === "editvalid") {
                $gameControler->editMapValidation();
            }
            else if($url[1] === "delete"){
                $gameControler->deleteMap($url[2]);
            }
            break;
        case 'login' :
            if(empty($url[1])){
                  $gameControler->displayUsers();
            }
            else if($url[1] === "connect") {
               var_dump($_POST);
            }
            ;
        break;
        case 'admin' : require_once "03_view/admin_view.php";
    }
}