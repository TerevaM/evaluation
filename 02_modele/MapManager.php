<?php

require_once "00_Manager.php";
require_once "Map.php";

class MapManager extends Manager{
    private $tab_maps;

    public function addMap($map) {
        $this->tab_maps[] = $map;
    }

    public function getMaps() {
        return $this->tab_maps;
    }

    public function loadMaps(){
        $bdd = $this->getBdd();
        $req = $bdd->prepare("SELECT * FROM maps");
        $req->execute();
        $myMaps = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myMaps as $value) {
            $map = new Map($value['id'],$value['name'], $value['type']);
            $this->addMap($map);
        }
    }
    public function newMapDB($name, $type){
        $req ="INSERT INTO maps (name, type)
        VALUES (:name, :type)";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":name", $name, PDO::PARAM_STR);
        $statement->bindValue(":type", $type, PDO::PARAM_STR);

        $result = $statement->execute();
        $statement->closeCursor();

        if($result) {
            $map = new Map($this->getBdd()->lastInsertId(),$name, $type);
            $this->addMap($map);
        }
    }

    public function getMapById($id) {
        foreach($this->tab_maps as $value) {
            if($value->getId() == $id){
                return $value;
            }
        }
    }

    public function editMapDB($id, $name, $type){
        $req = "UPDATE maps SET name = :name, type = :type WHERE id = :id";

        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->bindValue(":name", $name, PDO::PARAM_STR);
        $statement->bindValue(":type", $type, PDO::PARAM_STR);+

        $result = $statement->execute();
        $statement->closeCursor();

        if($result) {
            $this->getMapById($id)->setName($name);
            $this->getMapById($id)->setType($type);

        }
    }

    public function deleteMapDB($id) {
        $req = "DELETE FROM maps WHERE id = :id";
        $statement = $this->getBdd()->prepare($req);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);

        $result = $statement->execute();
        $statement->closeCursor();

        if($result) {
            $map = $this->getMapById($id);
            unset($map);
        }
    }
}