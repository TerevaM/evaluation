<?php
require_once "02_modele/UserManager.php";
require_once "02_modele/HeroManager.php";
class GameControler {
    private $userManager;
    private $heroManager;

    public function __construct() {
        $this->userManager = new UserManager();
        $this->userManager->loadUsers();
        $this->heroManager = new HeroManager();
        $this->heroManager->loadHeroes();
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
        $heroes = $this->heroManager->getHeroes();
        require_once "03_view/heroes_view.php";
    }
    public function newHeroForm() {
        require_once "03_view/new_hero_view.php";
    }
    public function newHeroValidation() {
       $this->heroManager->newHeroDB($_POST['name'], $_POST['category'], $_POST['life'], $_POST['attack'], $_POST['first_cap'], $_POST['second_cap'], $_POST['passif']);
        header('Location: '. URL .'heros');
    }
    public function editHeroForm($id) {
        $hero = $this->heroManager->getHeroById($id);
        require_once "03_view/edit_hero_view.php";
    }
    public function editHeroValidation() {
    $this->heroManager->editHeroDB($_POST['id_hero'],$_POST['name'], $_POST['category'], $_POST['life'], $_POST['attack'], $_POST['first_cap'], $_POST['second_cap'], $_POST['passif']);
            header('Location: '. URL .'heros');
    }

    public function deleteHero($id) {
        $this->heroManager->deleteHeroDB($id);
        header("Location: ". URL ."heros");
    }
}