<?php
require_once "02_modele/UserManager.php";
require_once "02_modele/HeroManager.php";
class GameControler {
    private $userManager;
    private $heroesManager;

    public function __construct() {
        $this->userManager = new UserManager();
        $this->userManager->loadUsers();
        $this->heroesManager = new HeroManager();
        $this->heroesManager->loadHeroes();
    }
    
    // ------------------ USERS ---------------------- //

    public function displayUsers() {
        $users = $this->userManager->getUsers();
        require_once "03_view/login_view.php";
    }
    public function connectUser(){
                $users = $this->userManager->getUsers();
                var_dump($users);
                echo "<br> STOP <br>";
                var_dump($_POST);
    }

    // ------------------ HEROES ---------------------- //
    public function displayHeroes() {
        $heroes = $this->heroesManager->getHeroes();
        require_once "03_view/heroes_view.php";
    }
    public function newHeroForm() {
        require_once "03_view/new_hero_view.php";
    }
    public function newHeroValidation() {
       $this->heroesManager->newHeroDB($_POST['name'], $_POST['category'], intval($_POST['life']),intval($_POST['attack']), $_POST['first_cap'], $_POST['second_cap'], $_POST['passif']);

    }
} 