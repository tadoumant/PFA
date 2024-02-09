<?php
    // BASE DE DONNES
        $userDB="root";
        $passwordDB="root";
        $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    // END BASE DE DONNES   
    if(isset($_REQUEST['submit'])){
        $email=$_REQUEST['email'];
        $pass=$_REQUEST['password'];
        $check=$database->prepare("SELECT * FROM Admin1 WHERE Email_Admin= :email AND Password_Admin= :pass " );
        $check->bindParam("email",$_REQUEST['email']);
        $check->bindParam("pass",$_REQUEST['password']);
        $check->execute();
        if($check->rowCount() === 1){
            foreach($check as $Info_Admin){
                $unique_id=$Info_Admin['ID_Admin'];
                $logout=$database->prepare("UPDATE Admin1 SET statusAdmin='Active now' WHERE ID_Admin='{$unique_id}'");
                $logout->execute();
                session_start();
                $_SESSION['ID_Admin']=$Info_Admin['ID_Admin'];
                $_SESSION['Prenom_Admin']=$Info_Admin['Prenom_Admin'];
                $_SESSION['Nom_Admin']=$Info_Admin['Nom_Admin'];
                $_SESSION['Pays_Admin']=$Info_Admin['Pays_Admin'];
                $_SESSION['Ville_Admin']=$Info_Admin['Ville_Admin'];
                $_SESSION['NumPhone_Admin']=$Info_Admin['NumPhone_Admin'];
                $_SESSION['SituationFam_Admin']=$Info_Admin['SituationFam_Admin'];
                $_SESSION['Email_Admin']=$Info_Admin['Email_Admin'];
                $_SESSION['Gender_Admin']=$Info_Admin['Gender_Admin'];
                $_SESSION['PremierAccesAuSite']=$Info_Admin['PremierAccesAuSite'];
                $_SESSION['Password_Admin']=$Info_Admin['Password_Admin'];
                $_SESSION['statusAdmin']=$Info_Admin['statusAdmin'];
                header("refresh:1;url=PLT_Admin/Dashboard.php");
            }
        }else{header("refresh:1;url=Admin.php");}
    }else{}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme Admin</title>
    <link rel="stylesheet" href="css/E-learning.css">
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../Capture d’écran 2022-07-17 à 03.37.57.png">
</head>
<body>
<?php include "Header.php"; ?>  
    <section id="header2" >
        <h3>Plateforme Admin</h3>
    </section>
    <section id="login">
        <form action="Admin.php"  method="post">
            <a href="Home.html" class="logo"><i class="fab fa-accusoft"></i><span>DEAN</span></a>
            <div class="email">
                <input type="email" name="email" placeholder=" ID Admin " required>
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <div class="password">
                <input type="password" name="password" placeholder=" Mot de passe " required>
                <i class="fa fa-lock" ></i>

            </div>
            <input type="submit" name="submit" value="Connexion" class="submit">
            <a href="" class="oub">Vous avez oublié votre nom d'utilisateur et/ou votre mot de passe ?</a>
        </form>
    </section>
    <script src="javascript/pass-show-hide.js"></script>
<?php include "Footer.php"; ?> 
</body>
</html>