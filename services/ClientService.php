<?php

include_once 'classes/Client.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class ClientService implements IDao {
    
     private $connexion;

    function __construct() {
        $connexion = new Connexion();
        $this->connexion = $connexion->getConnexion();
    }
    
    public function create($o) {
        $st = $this->connexion->prepare('INSERT INTO client(id,username,email,password) VALUES (NULL,?,?,?)');
        if ($st->execute(array($o->getUsername(), $o->getEmail(), $o->getPassword(),))) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($o) {
        
    }

    public function findAll() {
        
    }

    public function findById($id) {
        
    }

    public function update($o) {
        
    }

}
