<?php

chdir('..');
include_once 'services/PanierService.php';
extract($_POST);

$ps = new PanierService();

header('Content-type: application/json');
echo json_encode($ps->findAll());

