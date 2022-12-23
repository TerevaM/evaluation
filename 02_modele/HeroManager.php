<?php

require_once "00_Manager.php";
require_once "Hero.php";

class HeroManager extends Manager{
    private $tab_heroes;

    public function addHero($hero) {
        $this->tab_heroes[] = $hero;
    }

    public function getHeroes() {
        return $this->tab_heroes;
    }

    public function loadHeroes(){
        $bdd = $this->getBdd();
        $req = $bdd->prepare("SELECT * FROM heroes");
        $req->execute();
        $myHeroes = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myHeroes as $value) {
            $hero = new Hero($value['id'],$value['name'], $value['category'], $value['vie'], $value['attaque'], $value['first_cap'], $value['second_cap'], $value['passif']);
            $this->addHero($hero);
        }
    }
    public function newHeroDB($name, $category, $life, $attack, $first_cap, $second_cap, $passif){
        $req ="INSERT INTO heroes (name, category, vie, attaque, first_cap, second_cap, passif)
        VALUES (:name, :category, :vie, :attaque, :first_cap, :second_cap, :passif)";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":name", $name, PDO::PARAM_STR);
        $statement->bindValue(":category", $category, PDO::PARAM_STR);
        $statement->bindValue(":vie", $life, PDO::PARAM_INT);
        $statement->bindValue(":attaque", $attack, PDO::PARAM_INT);
        $statement->bindValue(":first_cap", $first_cap, PDO::PARAM_STR);
        $statement->bindValue(":second_cap", $second_cap, PDO::PARAM_STR);
        $statement->bindValue(":passif", $passif, PDO::PARAM_STR);

        $result = $statement->execute();
        $statement->closeCursor();

        if($result) {
            $hero = new Hero($this->getBdd()->lastInsertId(),$name, $category, $life, $attack, $first_cap, $second_cap, $passif);
            $this->addHero($hero);
        }
    }

    public function getHeroById($id) {
        foreach($this->tab_heroes as $value) {
            if($value->getId() == $id){
                return $value;
            }
        }
    }

    public function editHeroDB($id, $name, $category, $life, $attack, $first_cap, $second_cap, $passif){
        $req = "UPDATE heroes SET name = :name, category = :category, vie = :vie, attaque = :attaque, first_cap = :first_cap, second_cap = :second_cap, passif = :passif WHERE id = :id";

        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->bindValue(":name", $name, PDO::PARAM_STR);
        $statement->bindValue(":category", $category, PDO::PARAM_STR);
        $statement->bindValue(":vie", $life, PDO::PARAM_INT);
        $statement->bindValue(":attaque", $attack, PDO::PARAM_INT);
        $statement->bindValue(":first_cap", $first_cap, PDO::PARAM_STR);
        $statement->bindValue(":second_cap", $second_cap, PDO::PARAM_STR);
        $statement->bindValue(":passif", $passif, PDO::PARAM_STR);

        $result = $statement->execute();
        $statement->closeCursor();

        if($result) {
            $this->getHeroById($id)->setName($name);
            $this->getHeroById($id)->setCategory($category);
            $this->getHeroById($id)->setVie($life);
            $this->getHeroById($id)->setAttaque($attack);
            $this->getHeroById($id)->setFirst_cap($first_cap);
            $this->getHeroById($id)->setSecond_cap($second_cap);
            $this->getHeroById($id)->setPassif($passif);

        }
    }

    public function deleteHeroDB($id) {
        $req = "DELETE FROM heroes WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);

        $result = $statement->execute();
        $statement->closeCursor();

        if($result) {
            $hero = $this->getHeroById($id);
            unset($hero);
        }
    }
}