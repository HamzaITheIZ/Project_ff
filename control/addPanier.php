<?php

chdir('..');
include_once 'services/PanierService.php';
extract($_POST);

$ps = new PanierService();
$ps->create(new Panier(0,$photo, $nomPlat, $quantite, $prixTotal));
//$ps->create(new Panier($id, $photo, $nomPlat, $quantite, $prixTotal));



header('Content-type: application/json');
echo json_encode($ps->findAll());

