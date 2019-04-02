<?php

include_once 'classes/Panier.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class PanierService implements IDao {

    private $connexion;
    
       function __construct() {
        $connexion = new Connexion();
        $this->connexion = $connexion->getConnexion();
    }

    public function create($o) {
         $st = $this->connexion->prepare('INSERT INTO panier VALUES (NULL,?,?,?,?)');
         $st->execute(array($o->getPhoto(), $o->getNomPlat(), $o->getQuantite(), $o->getPrixTotal())) or die('Error');
         /*
        if ($st->execute(array($o->getPhoto(), $o->getNomPlat(), $o->getQuantite(), $o->getPrixTotal()))) {
            return true;
        } else {
            return false;
        }*/
    }

    public function delete($o) {
        
    }

    public function findAll() {
        $query = "select * from panier";
        $req = $this->connexion->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function findById($id) {
        
    }

    public function update($o) {
        
    }

}
