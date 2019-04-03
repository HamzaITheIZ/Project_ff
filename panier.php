<?php
session_start();

include 'connexion/Connexion.php';

//if($_SESSION['email'] == '')
//    header("Location:login.php");
//echo "email is  " . $_SESSION["email"] . ".<br>";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Panier</title>
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

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <script src="scripts/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="scripts/panier2.js" type="text/javascript"></script>

        <style>
            .opDel:hover{
                color: red;
            }
            .opEdi:hover{
                color: green;
            }
            .opCom:hover{
                color: blue;
            }
        </style>


    </head>
    <body>
        <?php
        $obj = new Connexion();

        if (empty($_SESSION['email'])) {

            header('Location:login.php');
        }
        ?>


        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" style="margin-left: 355px" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>HY's<br><small>NetEat</small></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item "><a href="index.php" class="nav-link">Accueil</a></li>
                        <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
                        <li class="nav-item active"><a class="nav-link" href="panier.php">Panier</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link">A Propos</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>     
                        <?php if (empty($_SESSION['email'])) {
                            ?>
                            <li class="nav-item"><a href="login.php" class="nav-link" id="loginItem" name="loginItem" >Login</a></li>
                            <?php
                        } else {
                            ?>
                            <li class="nav-item" style="margin-left:370px;"><a href="logOut.php" class="nav-link" id="logoutItem" name="logoutItem" >Logout</a></li>
                        <?php } ?> 

                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">
            <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-7 col-sm-12 text-center ftco-animate">
                            <span class="subheading">votre panier</span>
                            <h1 class="mb-4">Nous sommes toujours à votre service</h1>
                            <p><a href="menu.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">MENU</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <section >

            <div class="container">
                <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Plats pas encore commandés</h2>
                        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    </div>
                </div>
            </div>



            <div class="container-fluid">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-md-11 mx-auto" >
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4  sidebar-box " >
                                    <h1>Historique</h1>
                                    <table class="table  ">
                                        <thead>
                                        <th class="text-center">N° Plas</th>                                        
                                        <th class="text-center">date</th>
                                        <th class="text-center">prix totale</th>
                                        </thead>
                                        <tbody id="get_commande">
                                            <!--<tr>                           
                                                <td>pizza 1</td>                                            
                                                <td>30-03-2019 18:45</td>
                                                <td>100dh</td>
                                            </tr>
                                            <tr>
                                                <td>pizza 1</td>                                            
                                                <td>30-03-2019 18:45</td>
                                                <td>100dh</td>
                                            </tr>-->
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-8 pl-5" style="padding: 0 0 0 0;">
                                    <table class="table table-responsive-md table-hover" border="1">
                                        <thead style=" color: #FAC564;">
                                        <th class="text-center">photo</th>
                                        <th class="text-center">plat</th>
                                        <th class="text-center">quantité</th>
                                        <th class="text-center">prix totale</th>                                       
                                        <th class="text-center">supprimer</th>
                                        </thead>
                                        <tbody class="text-center " id="contain" style="color: white;">
                                            <tr class="text-center">
                                                <td colspan="5"><h3 class="form-control">il n'y a pas de Plas dans le panier pour Commander</h3></td>
                                            </tr>
                                            <!--<tr>                           
                                                <td><img class="image" src="images/burger-1.jpg" width="50" height="50"></td>
                                                <td>plat1</td>
                                                <td>2</td>              
                                                <td>80dh</td>
                                                <td><a href="#" title="commander"><span class="fas fa-money-check-alt opCom"></span></a></td>                                            
                                                <td><a href="#" title="supprimer"><span class="fas fa-trash-alt opDel"></span></a></td>
                                                <td><a href="#" title="modifier"><span class="far fa-edit opEdi"></span></a></td>
                                            </tr>
                                            <tr>                           
                                                <td><img class="image" src="images/burger-1.jpg" width="50" height="50"></td>
                                                <td>plat2</td>
                                                <td>2</td>              
                                                <td>80dh</td>
                                                <td><a href="#"><span class="fas fa-money-check-alt"></span></a></td>                                            
                                                <td><a href="#"><span class="fas fa-trash-alt"></span></a></td>
                                                <td><a href="#"><span class="far fa-edit"></span></a></td>
                                            </tr>
                                            <tr>                           
                                                <td><img class="image" src="images/burger-1.jpg" width="50" height="50"></td>
                                                <td>plat3</td>
                                                <td>2</td>              
                                                <td>80dh</td>
                                                <td><a href="#"><span class="fas fa-money-check-alt"></span></a></td>                                            
                                                <td><a href="#"><span class="fas fa-trash-alt"></span></a></td>
                                                <td><a href="#"><span class="far fa-edit"></span></a></td>
                                            </tr>-->

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button id="commandeBtn" class="btn btn-primary py-3 px-5">Commander</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>


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
        include_once("./models/update_quantite.php");
        ?>
    </body>
</html>
