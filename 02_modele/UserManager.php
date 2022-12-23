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
            $user = new User($value['id'], $value['firstname'], $value['lastname'],$value['rang'], $value['email'], $value['password']);
            $this->addUser($user);
        }
    }

    public function newUserDB($firstname, $lastname, $sexe, $email, $password){
        $req ="INSERT INTO users (firstname, lastname, sexe,rang, email, password)
        VALUES (:firstname, :lastname, :sexe, 'visiteur', :email, :password)";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":firstname", $firstname, PDO::PARAM_STR);
        $statement->bindValue(":lastname", $lastname, PDO::PARAM_STR);
        $statement->bindValue(":sexe", $sexe, PDO::PARAM_STR);
        $statement->bindValue(":email", $email, PDO::PARAM_STR);
        $statement->bindValue(":password", $password, PDO::PARAM_STR);
        
        $result = $statement->execute();
        $statement->closeCursor();

        if($result) {
            $user = new User($this->getBdd()->lastInsertId(),$firstname, $lastname, $sexe, $email, $password);
            $this->addUser($user);
        }
    }
}