<?php
include_once("../database/constants.php");
include_once("manage.php");

if (isset($_SESSION["id"])) {
    $user = $_SESSION["id"];
}

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
    $result = $m->update_record("panier", ["id" => $id], ["quantite" => $quantite, "prixTotal" => $prixTotale]);
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

//Fill Hot Meals
if (isset($_POST["fillPlas"])) {
    $m = new Manage();
    $result = $m->fillAnyRecord("plat");
    $rows = $result["rows"];
    if (count($rows) > 0) {
        $n = 0;
        ?>
        <div class="row no-gutters d-flex">
            <?php
            foreach ($rows as $row) {
                $n++;
                if ($n <= 3) {
                    ?>
                    <div class="col-lg-4 d-flex">
                        <div class="services-wrap d-flex">
                            <a href="#" class="img" style="background-image: url(images/<?php echo $row["photo"]; ?>);"></a>
                            <div class="text p-4">
                                <h3><?php echo $row["nom"]; ?></h3>
                                <p><?php echo $row["description"]; ?></p>
                                <p class="price"><span><?php echo $row["prix"]; ?> dhs</span> <a href="#" class="ml-2 btn btn-white btn-outline-white addToCart" indice="<?php echo $row["id"]; ?>">Ajouter au panier</a></p>
                            </div>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="col-lg-4 d-flex">
                        <div class="services-wrap d-flex">
                            <a href="#" class="img order-lg-last" style="background-image: url(images/<?php echo $row["photo"]; ?>);"></a>
                            <div class="text p-4">
                                <h3><?php echo $row["nom"]; ?></h3>
                                <p><?php echo $row["description"]; ?></p>
                                <p class="price"><span><?php echo $row["prix"]; ?> dhs</span> <a href="#" class="ml-2 btn btn-white btn-outline-white addToCart" indice="<?php echo $row["id"]; ?>">Ajouter au panier</a></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <?php
        exit();
    }
}

//Fill Slider Meals
/* if (isset($_POST["fillSlider"])) {
  $m = new Manage();
  $result = $m->fillAnyRecord("sliderplats");
  $rows = $result["rows"];
  ?>
  <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">
  <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
  <div class="overlay"></div>
  <div class="container" id="bienvenue">
  <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

  <div class="col-md-7 col-sm-12 text-center ftco-animate">
  <span class="subheading">Bienvenue</span>
  <h1 class="mb-4">Bienvenue au NetEat restaurant</h1>
  <p class="mb-4 mb-md-5">Merci de visiter notre site Web. Vous pouvez demander votre nourriture sur le site ou profiter de visiter le restaurant.</p>
  <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Créé Une Compte</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Inscrire</a></p>
  </div>

  </div>
  </div>
  </div>
  <?php
  if (count($rows) > 0) {
  ?>
  <?php
  foreach ($rows as $row) {
  ?>
  <div class="slider-item">
  <div class="overlay"></div>
  <div class="container">
  <div class="row slider-text align-items-center" data-scrollax-parent="true">

  <div class="col-md-6 col-sm-12 ftco-animate">
  <span class="subheading"><?php echo $row["nom"]; ?></span>
  <h1 class="mb-4">Recette spéciale</h1>
  <p class="mb-4 mb-md-5"><?php echo $row["description"]; ?></p>
  <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3 addToCart" indice="<?php echo $row["id"]; ?>">Order Now</a> <a href="menu.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
  </div>
  <div class="col-md-6 ftco-animate">
  <img src="images/<?php echo $row["photo"]; ?>" class="img-fluid" alt="">
  </div>

  </div>
  </div>
  </div>
  <?php
  }
  ?>
  </section>
  <?php
  exit();
  }
  } */

//For Edit Name Only
if (isset($_POST["editName"])) {
    $u = new Manage();
    $name = $_POST["name"];
    $result = $u->editProfilName($name, $user);
    echo $result;
}


//----------------Stat------------------
//Plat Stat
if (isset($_POST["statPlat"])) {
    $obj = new Manage();
    $row = $obj->getAllStat("plat");

    echo $row["Stat"];

    exit();
}
//Brand Stat
if (isset($_POST["statClient"])) {
    $obj = new Manage();
    $row = $obj->getAllStat("client");

    echo $row["Stat"];

    exit();
}
//category Stat
if (isset($_POST["statEmploye"])) {
    $obj = new Manage();
    $row = $obj->getAllStat("employe");

    echo $row["Stat"];

    exit();
}
//Command Stat
if (isset($_POST["statCommand"])) {
    $obj = new Manage();
    $row = $obj->getAllStat("commande");

    echo $row["Stat"];

    exit();
}

//For Edit Profile
if (isset($_POST["password"]) AND isset($_POST["passwordsec"])) {
    $user = new Manage();
    $result = $user->profilEdit($_POST["usernamen"], $_POST["password"], $_POST["passwordnew"], $_POST["id"]);
    echo $result;
    exit();
}

//Update Infrmations
if (isset($_POST["nomcomplet"])) {
    $m = new Manage();
    $id = $_POST["id"];
    $result = $m->update_record("client", ["id" => $id], ["nom" => $_POST["nomcomplet"], "adresse" => $_POST["adresse"], "telephone" => $_POST["telephone"]]);
    echo $result;
}

//Getting Information
if (isset($_POST["consulterInfo"])) {
    $m = new Manage();
    $result = $m->getSingleRecord("client", $_POST["id"]);
    echo json_encode($result);
    exit();
}
?>
