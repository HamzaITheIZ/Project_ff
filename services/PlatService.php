<?php

include_once 'classes/Plat.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class PlatService implements IDao {

    private $connexion;

    function __construct() {
        $connexion = new Connexion();
        $this->connexion = $connexion->getConnexion();
    }

    public function create($o) {
        $st = $this->connexion->prepare('INSERT INTO plat VALUES (NULL,?,?,?,?)');
        if ($st->execute(array($o->getNom(), $o->getDescription(), $o->getPrix(), $o->getPhoto()))) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($o) {
        $query = "DELETE FROM plat WHERE id = ?";
        $req = $this->connexion->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from plat";
        $req = $this->connexion->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
     public function findPizza() {
        $query = "SELECT * FROM plat Where nom LIKE 'pizza%'";
        $req = $this->connexion->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
      public function findPasta() {
        $query = "SELECT * FROM plat Where nom LIKE 'pasta%'";
        $req = $this->connexion->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
        public function findBurger() {
        $query = "SELECT * FROM plat Where nom LIKE 'burger%'";
        $req = $this->connexion->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
      public function findOther() {
        $query = "SELECT * FROM plat Where nom NOT LIKE 'burger%' AND nom NOT LIKE 'pizza%' AND nom NOT LIKE 'pasta%'";
        $req = $this->connexion->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function findById($id) {
        $query = "select * from plat where id =?";
        $req = $this->connexion->prepare($query);
        $req->execute(array($id));
        $res = $req->fetch(PDO::FETCH_OBJ);
        $pla = new Plat($res->id, $res->nom, $res->description, $res->prix, $res->photo);
        return $pla;
    }

    public function update($o) {
        $query = "UPDATE plat SET nom = ?,description=?,prix=?,photo=? where id = ?";
        $req = $this->connexion->prepare($query);
        $req->execute(array($o->getNom(), $o->getDescription(),$o->getPrix(),$o->getPhoto(), $o->getId())) or die('Error');
    }

    public function findByIdApi($id) {
        $query = "select * from plat where id =?";
        $req = $this->connexion->prepare($query);
        $req->execute(array($id));
        $res = $req->fetch(PDO::FETCH_OBJ);
        return $res;
    }
    

}
