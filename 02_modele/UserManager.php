<?php

require_once "00_Manager.php";
require_once "User.php";

class UserManager extends Manager{
    private $tab_users;

    public function addUser($user) {
        $this->tab_users[] = $user;
    }

    public function getUsers() {
        return $this->tab_users;
    }

    public function loadUsers(){
        $bdd = $this->getBdd();
        $req = $bdd->prepare("SELECT * FROM users");
        $req->execute();
        $myUsers = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myUsers as $value) {
            $user = new User($value['id'], $value['firstname'], $value['lastname'], $value['age'], $value['date_of_birth']);
            $this->addUser($user);
        }
    }
}