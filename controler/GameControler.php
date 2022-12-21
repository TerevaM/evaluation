<?php
require_once "modele/GameManager.php";
class GameControler {
    private $gameManager;

    public function __construct() {
        $this->gameManager = new GameManager();
        $this->gameManager->loadUsers();
    }
}