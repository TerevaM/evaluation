<?php
require_once "02_modele/UserManager.php";
require_once "02_modele/HeroManager.php";
require_once "02_modele/MapManager.php";
class GameControler {
    private $userManager;
    private $heroManager;

    public function __construct() {
        $this->userManager = new UserManager();
        $this->userManager->loadUsers();
        $this->heroManager = new HeroManager();
        $this->heroManager->loadHeroes();
        $this->mapManager = new MapManager();
        $this->mapManager->loadMaps();
        
    }
    
    // ------------------ USERS ---------------------- //

    public function displayUsers() {
        $users = $this->userManager->getUsers();
        require_once "03_view/login_view.php";
    }
    // public function newUser() {

    // }

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

        // ------------------ MAPS ---------------------- //
        public function displayMaps() {
            $maps = $this->mapManager->getMaps();
            require_once "03_view/maps_view.php";
        }
        public function newMapForm() {
            require_once "03_view/new_map_view.php";
        }
        public function newMapValidation() {
            $this->mapManager->newMapDB($_POST['name'], $_POST['type']);
            header('Location: '. URL .'maps');
        }
    public function editMapForm($id) {
        $map = $this->mapManager->getMapById($id);
        require_once "03_view/edit_map_view.php";
    }
    public function editMapValidation() {
        $this->mapManager->editMapDB($_POST['id_map'],$_POST['name'], $_POST['type']);
        header('Location: '. URL .'maps');
    }
    
    public function deleteMap($id) {
        $this->mapManager->deleteMapDB($id);
        header("Location: ". URL ."maps");
    }
    // ------------------ USERS ---------------------- //
    public function newUserValidation() {
        $this->userManager->newUserDB($_POST['firstname'], $_POST['lastname'], $_POST['sexe'], $_POST['email'], $_POST['password']);
        header('Location:'. URL .'accueil');
    }

}