<?php

include_once("../database/constants.php");

class Manage {

    private $con;

    function __construct() {
        include_once("../database/db.php");
        $db = new Database();
        $this->con = $db->connect();
    }

    // method updated by your needs
    public function fillAnyRecord($table) {
        if ($table == "commande") {
            $sql = "SELECT C.id , COUNT(LC.nomPlat) AS 'Plas' , C.dateCommande , C.montantTotale from commande C INNER JOIN ligne_commande LC ON C.id = LC.commande WHERE C.clientCommande = " . $_SESSION["id"] . " GROUP BY C.id";
        } else {
            $sql = "SELECT * FROM " . $table . " ";
        }
        $result = $this->con->query($sql) or die($this->con->error);
        $rows = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return ["rows" => $rows];
    }

    public function getSingleRecord($table, $id) {
        if ($table = "panier") {
            $sql = "SELECT pa.*,p.prix FROM " . $table . " pa INNER JOIN plat p ON pa.nomPlat = p.nom WHERE pa.id = ? LIMIT 1";
        } else {
            $sql = "SELECT * FROM " . $table . " WHERE id = ? LIMIT 1";
        }
        $pre_stmt = $this->con->prepare($sql);
        $pre_stmt->bind_param("i", $id);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
        }
        return $row;
    }

    //delete li jab lah 
    public function deleteRecord($table, $id) {

        $pre_stmt = $this->con->prepare("DELETE FROM " . $table . " WHERE id = ?");
        $pre_stmt->bind_param("i", $id);
        $result = $pre_stmt->execute() or die($this->con->error);
        if ($result) {
            return "DELETED";
        }
    }

    //best method you can ever seen xD 
    public function update_record($table, $where, $fields) {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
            // id = '5' AND m_name = 'something'
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        foreach ($fields as $key => $value) {
            //UPDATE table SET m_name = '' , qty = '' WHERE id = '';
            $sql .= $key . "='" . $value . "', ";
        }
        $sql = substr($sql, 0, -2);
        $sql = "UPDATE " . $table . " SET " . $sql . " WHERE " . $condition;
        if (mysqli_query($this->con, $sql)) {
            return "UPDATED";
        }
    }

    public function addCommande($client) {

        $montant = 0;
        $commande_id = null;
        $m = new Manage();
        $result = $m->fillAnyRecord("panier");
        $rows = $result["rows"];

        if (count($rows) > 0) {
            foreach ($rows as $rowi) {
                $montant += $rowi["prixTotal"];
            }
        }

        $date = date("d/m/Y H:i");
        $etat = "Pas Encore";

        if ($montant != 0) {
            $pre_stmt = $this->con->prepare("INSERT INTO `commande`(`clientCommande`, `dateCommande` ,`montantTotale` ,`etatLivraison`)
		 VALUES (?,?,?,?)");
            $pre_stmt->bind_param("isss", $client, $date, $montant, $etat);
            $result = $pre_stmt->execute() or die($this->con->error);
            $commande_id = $pre_stmt->insert_id;
        }
        if ($commande_id != null) {
            foreach ($rows as $rowi) {
                $insert_commande = $this->con->prepare("INSERT INTO `ligne_commande`(`commande`, `nomPlat`, `quantiteCommande`, `prixTotale`)
				 VALUES (?,?,?,?)");
                $insert_commande->bind_param("isid", $commande_id, $rowi["nomPlat"], $rowi["quantite"], $rowi["prixTotal"]);
                $insert_commande->execute() or die($this->con->error);
            }

            $pre_stmt = $this->con->prepare("DELETE FROM panier");
            $pre_stmt->execute() or die($this->con->error);
        }

        if ($result) {
            return "COMMANDE_ADDED";
        } else {
            return 0;
        }
    }

}

?>