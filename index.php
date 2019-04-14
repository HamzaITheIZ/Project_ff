<?php
session_start();

include 'connexion/Connexion.php';

if (isset($_POST['logoutItem'])) {
    session_destroy();
    unset($_SESSION['email']);
    unset($_SESSION['check']);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bienvenue</title>
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
        <script src="scripts/panier.js" type="text/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>HY's<br><small>NetEat</small></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="index.php" class="nav-link">Accueil</a></li>
                        <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="panier.php">Panier</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link">A Propos</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>     
                        <?php if (empty($_SESSION['email'])) {
                            ?>
                            <li class="nav-item"><a href="login.php" class="nav-link" id="loginItem" name="loginItem" >Login</a></li>
                            <?php
                        } else {
                            ?>
                            <li class="nav-item"><a href="logOut.php" class="nav-link" id="logoutItem" name="logoutItem" >Logout</a></li>
                        <?php } ?> 

                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

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
            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text align-items-center" data-scrollax-parent="true">

                        <div class="col-md-6 col-sm-12 ftco-animate">
                            <span class="subheading">NetEat Format</span>
                            <h1 class="mb-4">Recette spéciale</h1>
                            <p class="mb-4 mb-md-5">Meilleure Pizza que vous pouvez voir.</p>
                            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <img src="images/bg_2.png" class="img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text align-items-center" data-scrollax-parent="true">

                        <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
                            <span class="subheading">NetEat Simple Cake</span>
                            <h1 class="mb-4">Apéritifs apéritifs</h1>
                            <p class="mb-4 mb-md-5">Des ingrédients naturels rien que pour votre santé.</p>
                            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <img src="images/cake.png" class="img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </div>


        </section>


        <section class="ftco-about d-md-flex">
            <div class="one-half img" style="background-image: url(images/neteat.jpg);"></div>
            <div class="one-half ftco-animate">
                <div class="heading-section ftco-animate ">
                    <h2 class="mb-4">Bienvenue au <span class="flaticon-pizza">NetEat</span> Restaurant</h2>
                </div>
                <div>
                    <p>Nous vous souhaitons la bienvenue à tout moment et nous espérons recevoir votre satisfaction.
                        Nous sommes un restaurant qui tient compte de l'opinion de nos visiteurs et développe notre propre plas en fonction de vos opinions.</p>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-services" >
            <div class="overlay"></div>
            <div class="container" id="nosServices">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate text-center">
                        <h2 class="mb-4">Nos services</h2>
                        <p>Nous nous efforçons toujours de vous offrir la meilleure expérience possible avec nos recettes distinctives.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 ftco-animate">
                        <div class="media d-block text-center block-6 services">
                            <div class="icon d-flex justify-content-center align-items-center mb-5">
                                <span class="flaticon-diet"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading">Aliments sains</h3>
                                <p>Nous utilisons des ingrédients naturels pour prendre soin de votre santé.</p>
                            </div>
                        </div>      
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <div class="media d-block text-center block-6 services">
                            <div class="icon d-flex justify-content-center align-items-center mb-5">
                                <span class="flaticon-bicycle"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading">Livraison la plus rapide</h3>
                                <p>Nous avons le meilleur personnel et respectons le temps des choses les plus importantes pour nous.</p>
                            </div>
                        </div>      
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <div class="media d-block text-center block-6 services">
                            <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
                            <div class="media-body">
                                <h3 class="heading">Recettes originales</h3>
                                <p>Nous avons nos propres recettes et nous élaborons des recettes en fonction de l'opinion des visiteurs.</p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate text-center">
                        <h2 class="mb-4">PLATS CHAUDS</h2>
                        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                        <p>Sur la base des évaluations des clients, nous avons dressé une liste de nos meilleurs plas.</p>
                    </div>
                </div>
            </div>
            <div class="container-wrap" id="hotmeals">
                <!--<div class="row no-gutters d-flex">
                    <div class="col-lg-4 d-flex ftco-animate">
                        <div class="services-wrap d-flex">
                            <a href="#" class="img" style="background-image: url(images/pizza-1.jpg);"></a>
                            <div class="text p-4">
                                <h3>Pizza</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                                <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex ftco-animate">
                        <div class="services-wrap d-flex">
                            <a href="#" class="img" style="background-image: url(images/burger-1.jpg);"></a>
                            <div class="text p-4">
                                <h3>Burger</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex ftco-animate">
                        <div class="services-wrap d-flex">
                            <a href="#" class="img" style="background-image: url(images/pizza-3.jpg);"></a>
                            <div class="text p-4">
                                <h3>Pizza</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex ftco-animate">
                        <div class="services-wrap d-flex">
                            <a href="#" class="img order-lg-last" style="background-image: url(images/pasta-1.jpg);"></a>
                            <div class="text p-4">
                                <h3>Pasta</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                                <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex ftco-animate">
                        <div class="services-wrap d-flex">
                            <a href="#" class="img order-lg-last" style="background-image: url(images/pasta-2.jpg);"></a>
                            <div class="text p-4">
                                <h3>Pasta</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex ftco-animate">
                        <div class="services-wrap d-flex">
                            <a href="#" class="img order-lg-last" style="background-image: url(images/burger-2.jpg);"></a>
                            <div class="text p-4">
                                <h3>Burger</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                                <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>

        </section>

        <section class="ftco-gallery">
            <div class="container-wrap">
                <div class="row no-gutters">
                    <div class="col-md-3 ftco-animate">
                        <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                <span class="icon-search"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section  class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" id="statistiques">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <div class="icon"><span class="flaticon-pizza-1"></span></div>
                                        <strong id="ps" class="number"></strong>
                                        <span>Totale de Plas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <div class="icon"><span class="flaticon-laugh"></span></div>
                                        <strong id="cs" class="number"></strong>
                                        <span>Nombre de Clients</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <div class="icon"><span class="flaticon-chef"></span></div>
                                        <strong id="es" class="number"></strong>
                                        <span>Nombre de Employes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <div class="icon"><span class="flaticon-medal"></span></div>
                                        <strong id="cms" class="number"></strong>
                                        <span>Nombre de Commandes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="ftco-appointment">
            <div class="overlay"></div>
            <div class="container-wrap">
                <div class="row no-gutters d-md-flex align-items-center">
                    <div class="col-md-6 d-flex align-self-stretch" style="background-image: url(images/about.jpg);">

                    </div>
                    <div class="col-md-6 appointment ftco-animate">
                        <h3 class="mb-3">Contact Us</h3>
                        <form action="#" class="appointment-form">
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="d-me-flex">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="test" id="test" cols="30" rows="3" class="form-control" placeholder="Message">
                                    
                                </textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
                            </div>
                        </form>
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
                            <li class="list-inline-item  ftco-animate"><a href="#bienvenue"><span>bienvenue</span></a></li>
                            <li class="list-inline-item  ftco-animate">|</li>
                            <li class="list-inline-item  ftco-animate"><a href="#nosServices"><span>nos services</span></a></li>
                            <li class="list-inline-item  ftco-animate">|</li>
                            <li class="list-inline-item  ftco-animate"><a href="#section-counter"><span>statistiques</span></a></li>
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

    </body>
</html>