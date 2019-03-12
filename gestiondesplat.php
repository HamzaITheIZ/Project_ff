<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pizza - Free Bootstrap 4 Template by Colorlib</title>
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
                        <li class="nav-item"><a href="adminIndex.php" class="nav-link">Home</a></li>
                        <li class="nav-item active"><a href="gestiondesplat.php" class="nav-link">Gestion des Plat</a></li>
                        <li class="nav-item"><a href="services.html" class="nav-link">Gestion des Commande</a></li>
                        <li class="nav-item"><a href="blog.html" class="nav-link">Gestion des  Laivreur &AMP; Véhicule</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">Histoir</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Consulter</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

            <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center">

                        <div class="col-md-7 col-sm-12 text-center ftco-animate">
                            <h1 class="mb-3 mt-5 bread">Ajouter Des Plat</h1>
                            <p class="breadcrumbs"><span>Ajouter Plat</span>  <span class="mr-2"><a href="platlist.php">Voir La list</a></span> </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section contact-section">
            <div class="container mt-5">
                <div class="row block-9">
                    <div class="col-md-4 contact-info ftco-animate">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <h2 class="h4">Ajouter Un Plat</h2>
                            </div>
                            <div class="col-md-12 mb-3">

                            </div>
                            <div class="col-md-12 mb-3">

                            </div>
                            <div class="col-md-12 mb-3">

                            </div>
                            <div class="col-md-12 mb-3">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 ftco-animate">
                        <form action="#" class="contact-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Donne Le Nom">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Donner Une Description">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Donner Le Prix">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">                  <input type="text" class="form-control" placeholder="Choisir Un Fichier">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button class="btn btn-primary py-3 px-5">Choisir</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Ajouter" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div id="map"></div>


        <footer class="ftco-footer ftco-section img">

            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>
</html>

