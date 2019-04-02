<?php


class Panier {
    private $id;
    
    private $photo;
    private $nomPlat;
    private $quantite;
    private $prixTotal;
    
    function __construct($id,$photo, $nomPlat, $quantite, $prixTotal) {
        $this->id=$id;
        $this->photo = $photo;
        $this->nomPlat = $nomPlat;
        $this->quantite = $quantite;
        $this->prixTotal = $prixTotal;
    }
    
    function getId() {
        return $this->id;
    }

    function getPhoto() {
        return $this->photo;
    }

    function getNomPlat() {
        return $this->nomPlat;
    }

    function getQuantite() {
        return $this->quantite;
    }

    function getPrixTotal() {
        return $this->prixTotal;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }

    function setNomPlat($nomPlat) {
        $this->nomPlat = $nomPlat;
    }

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    function setPrixTotal($prixTotal) {
        $this->prixTotal = $prixTotal;
    }



}
