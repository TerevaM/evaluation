<?php

abstract class Manager {

    private $pdo;

    private function setBdd(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=eval_overwatch;charset=utf8","root","");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd(){
        if ($this->pdo == null) {
            $this->setBdd();
        }
        return $this->pdo;
    }
    
}

// try {
//     $dbLink = new PDO('mysql:host=localhost:3306;dbname=galerie_photo', 'root', '');
// //users database
//     $req_users = $dbLink->prepare('SELECT * from users');
//     $req_users->execute();
//     $tab_users = $req_users->fetchAll(PDO::FETCH_ASSOC);