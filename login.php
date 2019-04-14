<?php
session_start();

include 'connexion/Connexion.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Bienvenue</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link type="text/css" rel="stylesheet" href="loginStyle/css/bootstrap.css">        
        <link type="text/css" rel="stylesheet" href="loginStyle/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" ></script>



        <link rel="stylesheet" href="loginStyle/style.css">
    </head>
    <body>
        <div class="modal-dialog text-center">
            <div class="col-sm-9 main-section">
                <div class="modal-content">
                    <div class="col-12 user-img" >
                        <img src="loginStyle/face-3.png"/>
                    </div>
                    <div class="col-12 form-input">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
                            <div class="form-group">
                                <input class="form-control" type="text" id="user" name="user" placeholder="votre email/username">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" id="pass" name="pass" placeholder="votre mot de passe">
                            </div>
                            <button type="submit" class=" btn btn-success" id="log" name="log">connexion</button>


                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $newCnx = new Connexion();

                                $email = $_POST['user'];
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                
                                
                                 $_SESSION['check'] = 0;
                                
                                
                                if (empty($email)) {
                                    echo '<script>alert("saisir un email valide");</script>';
                                }
                                if (empty($pass)) {
                                    echo '<script>alert("saisir un mot de passe valide")</script>';
                                } else {
                                    //                $q = "SELECT email,password,role FROM employe WHERE email=? and password=?";
                                    //                $stmt = $newCnx->connexion->prepare($q);
                                    $stmt = $newCnx->connexion->prepare("SELECT id,username,email,password FROM client WHERE (email=? OR username=?) and password=?");
                                    $stmt->execute(array($email, $user, $pass));
                                    $count = $stmt->rowCount();
                                    if ($count != 0) {
                                        foreach ($stmt->fetchAll() as $row) {
                                            //$_SESSION['cin'] = $row['cin'];
                                            $_SESSION['email'] = $row["email"];
                                            $_SESSION['id'] = $row["id"];
                                            $_SESSION['user'] = $row["username"];
                                            $_SESSION['pass'] = $pass;
                                            $_SESSION['check'] = 1;
                                            //$_SESSION['role'] = $row['role'];
                                        }
                                        
                                        header("Location:index.php");
                                    } else {
                                        //echo "<div class='container'>";
                                        echo '<div class="alert alert-danger">Email ou Mot de passe est <strong>incrorrect</strong></div>';
                                    }
                                }
                            }
                            ?> 



                        </form>
                    </div>
                    <div class="col-12 forgot">
                        <a href="#">mot de passe oublié?</a> <br>                       
                        <a href="signup.php">nouveau client ?</a>

                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
