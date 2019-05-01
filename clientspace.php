<?php
session_start();

include 'connexion/Connexion.php';

//if($_SESSION['email'] == '')
//    header("Location:login.php");
//echo "email is  " . $_SESSION["email"] . ".<br>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Espace de Client - Commande</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">

        <link rel="stylesheet" href="css/aos.css">

        <link rel="stylesheet" href="css/ionicons.min.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">


        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="scripts/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="./js/manage.js"></script>
        <script src="scripts/panier2.js" type="text/javascript"></script>

        <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
        <script>paypal.Buttons().render('#paypal');</script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>HY's<br><small>NetEat</small></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link">Accueil</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>   
                        <li class="nav-item"><a class="nav-link" href="panier.php">Panier</a></li>
                        <?php if (empty($_SESSION['email'])) {
                            ?>
                            <li class="nav-item"><a href="login.php" class="nav-link btn btn-primary p-3 px-xl-4 py-xl-3" id="loginItem" name="loginItem" >Login</a></li>
                            <?php
                        } else {
                            ?>
                            <li class="nav-item"><a href="logOut.php" class="nav-link btn btn-primary p-3 px-xl-4 py-xl-3" id="logoutItem" name="logoutItem" >Logout</a></li>
                        <?php } ?> 

                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <section class="ftco-section contact-section">
            <div class="heading-section ftco-animate text-center">
                <h2 class="h2">Espace de Client</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            </div>
            <div class="container mt-5">
                <div class="row block-9">
                    <div class="col-md-6 contact-info ftco-animate">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <h3 class="h3">Information de Compte</h3>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="h5">Votre Nom de Utilisateur:</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="h5"><?php echo $_SESSION['user']; ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="h5">Votre Email:</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="h5"><?php echo $_SESSION['email']; ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <a data-toggle="modal" data-target="#edit_profil" class="btn btn-primary py-3 px-5">Edit Profil</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5 ftco-animate">
                        <div class="row">
                            <div class="form-group">
                                <div class="row">
                                    <h3 class="h3">Voir Votre Information Personnel</h3>
                                </div>
                            </div> 
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                        <a data-toggle="modal" data-target="#consulter" cid='<?php echo $_SESSION["id"]; ?>' class="btn btn-primary py-3 px-5 consulter" >Consulter</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <br>           
            <br>
            <div class="heading-section ftco-animate text-center">
                <h2 class="h2">Traitement de Commande</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            </div>
            <br>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2">
                        <div class="form-group text-center">
                            <div class="row">
                                <div class="col-md-10">
                                    <h4 class="h4">Remplir Vos Données</h4>
                                    <a data-toggle="modal" data-target="#remplir_info" class="btn btn-primary py-3 px-5">Remplir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="h3" style="color: #fac564;">Assurez-vous de remplir les informations pour faire une commande</h3>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="form-group text-center">
                                <h4 class="h4">Method de Paiment</h4>
                                <div class="row">
                                    <!--<a class="btn btn-primary py-3 px-5 paypal" data-toggle="modal" data-target="#paypal">PayPal</a>-->
                                    <div class="col-md-8">
                                        <div class="form-group" id="paypal">

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary py-3 px-5" id="commandeBtn">A Livraison</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div id="map"></div>


    <footer class="ftco-footer ftco-section img">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <div class="heading-section ftco-animate text-center">
                        <h2 class="mb-4">MERCI POUR VOTRE VISITE</h2>
                        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                        <p>S'il vous plaît n'hésitez pas à visiter notre site Web à tout moment</p>
                        <p>Nous sommes toujours en service</p>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
            <div class="row">
                <div class="col-md-2" >

                </div>
                <div class="col-md-8 mx-auto">
                    <div class="ftco-footer-widget text-center">
                        <ul class="ftco-footer-social">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2" >

                </div>
            </div>
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8 mx-auto">
                    <ul class="list-inline inline text-center">
                        <li class="list-inline-item  ftco-animate"><a href="index.html#bienvenue"><span>bienvenue</span></a></li>
                        <li class="list-inline-item  ftco-animate">|</li>
                        <li class="list-inline-item  ftco-animate"><a href="index.html#nosServices"><span>nos services</span></a></li>
                        <li class="list-inline-item  ftco-animate">|</li>
                        <li class="list-inline-item  ftco-animate"><a href="index.html#section-counter"><span>statistiques</span></a></li>
                    </ul>
                </div>
                <div class="col-md-2">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p class="ftco-animate">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script>
                        Tous les droits sont réservés
                    </p>
                </div>
            </div>

        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <?php
    //Profil Form
    include_once("./modals/paypalpayment.php");
    include_once("./modals/consulter.php");
    include_once("./modals/edit_profil.php");
    include_once("./modals/remplir_info.php");
    ?>
</body>
</html>