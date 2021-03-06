<?php
    include_once './connexion/Connexion.php';
    include_once './services/ClientService.php';
    
    
    if(isset($_POST['inscr'])){
        echo "<script>alert('true');</script>";
        $userName = htmlspecialchars($_POST['user_name']);        
        $userEmail = htmlspecialchars($_POST['user_email']);
        $userPassword = htmlspecialchars($_POST['user_password']);
        
        $cs = new ClientService();
        $cl = new Client(0, $userName, $userEmail, $userPassword);
        $cs->create($cl);
        header("Location:login.php");
    }

?>



<!DOCTYPE html>

<html>
    <head>
        <title>Bienvenue</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link type="text/css" rel="stylesheet" href="loginStyle/css/bootstrap.css">        
        <link type="text/css" rel="stylesheet" href="loginStyle/css/bootstrap.min.css">        
        <link type="text/css" rel="stylesheet" href="loginStyle/css/bootstrap-grid.css">
        <!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        -->



        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" ></script>

        <link rel="stylesheet" href="loginStyle/style2.css">
        <script type="text/javascript" src="./js/user.js"></script>

        <style>
            .hy-img{
                width:250px;
                height: 250px;
                margin: auto;
            }
            .espace{
                margin: 10px;
            }
            .row{
                margin-top: 120px;
            }
            .form-group{
                margin-top:  20px;
            }
        </style>

    </head>
    <body>
        <!--
        <div class="container" >
            <div class=row" style="background-color: purple;">
                <div class=" col" style="background-color:blue;">
                    <img src="loginStyle/hysTextLogo-1.png"style="width:100px;height: 100px;background-color: gray;">
                </div>
                <div class=" col"style="background-color: yellow;height: 100px;">

                </div>
                <div class=" col"style="background-color:green;">
                    <div class=" form-input">
                        <form>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="votre nom d'utilisateur">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="votre email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="votre mot de passe">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="confirmer mot de passe">
                            </div>
                            <button type="submit" class=" btn btn-success">connexion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4 espcae text-right" style="padding-top:50px;">
                    <a href="index.php"><img class="hy-img" src="loginStyle/hysTextLogo-1.png"></a>
                </div>
                <div class="col-sm-0 espace" style="border-left: black 5px solid "></div>
                <div class="col-md-5 modal-content espace">
                    <div class=" form-input">
                        <form id="user_form" method="POST" action="signup.php" enctype="multipart/form-data">
                            <div class="form-group form-group0">
                                <input class="form-control" type="text" id="user_name" name="user_name" placeholder="votre nom d'utilisateur">
                                <small id="u_error" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group form-group01">
                                <input class="form-control" type="email" id="user_email" name="user_email" placeholder="votre email">
                            </div>
                            <div class="form-group form-group1">
                                <input class="form-control" type="password" id="user_password" name="user_password" placeholder="votre mot de passe">
                            </div>
                            <div class="form-group form-group1">
                                <input class="form-control" type="password" id="user_password2" name="user_password2" placeholder="confirmer mot de passe">
                            </div>
                            <div class="text-right" style="padding-bottom: 10px;">
                                <button type="submit" class=" btn btn-success " id="inscr" name="inscr" style="margin: auto;">Inscription</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
