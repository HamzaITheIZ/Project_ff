<?php

include_once("../database/constants.php");
include_once("manage.php");

$user = $_SESSION["id"];

//Delete Panier Item
if (isset($_POST["deletePanier"])) {
    $m = new Manage();
    $result = $m->deleteRecord("panier", $_POST["id"]);
    echo $result;
}

//Getting Panier data
if (isset($_POST["updatePanier"])) {
    $m = new Manage();
    $result = $m->getSingleRecord("panier", $_POST["id"]);
    echo json_encode($result);
    exit();
}

//Update Panier Quantite
if (isset($_POST["quantite"])) {
    $m = new Manage();
    $id = $_POST["id"];
    $quantite = $_POST["quantite"];
    $prixTotale = $_POST["prix"];
    $result = $m->update_record("panier", ["id" => $id], ["quantite" => $quantite , "prixTotal" => $prixTotale]);
    echo $result;
}

//Add Commande
if (isset($_POST["ajouterCommande"])) {
    $m = new Manage();
    $result = $m->addCommande($user);
    echo $result;
    exit();
}

//Fill Historique
if (isset($_POST["fillCommande"])) {
    $m = new Manage();
    $result = $m->fillAnyRecord("commande");
    $rows = $result["rows"];
    if (count($rows) > 0) {
        foreach ($rows as $row) {
            ?>
            <tr class="text-center" style="color: white;">
                <td><?php echo $row["Plas"]; ?></td>
                <td><?php echo $row["dateCommande"]; ?></td>
                <td><?php echo $row["montantTotale"]; ?></td>
            </tr>
            <?php
        }
        exit();
    }
}

?>