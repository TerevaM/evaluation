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

            }
            else if($url[1] === "delete"){

            }
            
        break;
        case 'login' :
            if(empty($url[1])){
                  $gameControler->displayUsers();
            }
            else if($url[1] === "connect") {
               var_dump($_POST);
               echo "test";
            }
            ;
        break;
        case 'admin' : require_once "03_view/admin_view.php";
    }
}