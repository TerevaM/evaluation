<?php
require_once "Manager.php";
require_once "User.php";

class GameManager extends Manager {
    private $users;

    public function addUser($user){
        $this->users[] = $user;
    }
    
    public function getUser(){
        return $this->users;
    }

    public function loadUsers(){
        $bdd = $this->getBdd();
        $req = $bdd->prepare("SELECT * FROM users");
        $req->execute();
        $myUsers = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myUsers as $value){
            $g = new User($value['id'], $value['firstname'], $value['lastname'], $value['age'], $value['date_of_birth']);
            $this->addUser($g);
        }
    }
}