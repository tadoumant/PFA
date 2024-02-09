<?php
    session_start();
    $ID_Admin=$_SESSION['ID_Admin'];
    $Prenom_Admin=$_SESSION['Prenom_Admin'];
    $Nom_Admin=$_SESSION['Nom_Admin'];
    $Pays_Admin=$_SESSION['Pays_Admin'];
    $Ville_Admin=$_SESSION['Ville_Admin'];
    $NumPhone_Admin=$_SESSION['NumPhone_Admin'];
    $SituationFam_Admin=$_SESSION['SituationFam_Admin'];
    $Email_Admin=$_SESSION['Email_Admin'];
    $Gender_Admin=$_SESSION['Gender_Admin'];
    $PremierAccesAuSite=$_SESSION['PremierAccesAuSite'];
    $Password_Admin=$_SESSION['Password_Admin'];
    $statusAdmin=$_SESSION['statusAdmin'];
    $userDB="root";
    $passwordDB="root";
    $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    $check=$database->prepare("SELECT * FROM BankAdmin  " );
    $check->execute();
        if($check->rowCount() === 1){
            foreach($check as $Info_BankAdmin){
            }
            $check2=$database->prepare("SELECT * FROM Admin1  " );
            $check2->execute();
            if($check2->rowCount() === 1){
                foreach($check2 as $check2){
                    $ID_Admin=$check2['ID_Admin'];
                    $Prenom_Admin=$check2['Prenom_Admin'];
                    $Nom_Admin=$check2['Nom_Admin'];
                    $Pays_Admin=$check2['Pays_Admin'];
                    $Ville_Admin=$check2['Ville_Admin'];
                    $NumPhone_Admin=$check2['NumPhone_Admin'];
                    $SituationFam_Admin=$check2['SituationFam_Admin'];
                    $Email_Admin=$check2['Email_Admin'];
                    $Gender_Admin=$check2['Gender_Admin'];
                    $PremierAccesAuSite=$check2['PremierAccesAuSite'];
                    $Password_Admin=$check2['Password_Admin'];
                    $statusAdmin=$check2['statusAdmin'];
                }
            }
            if(isset($_REQUEST['mod'])){header("refresh:1;url=UpdateAdmin.php");}
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <link rel="stylesheet" href="CSS/Profil.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="icon" href="../Capture d’écran 2022-07-17 à 03.37.57.png">
</head>
<style>
    .mod{
        background-color: transparent;
        border: none;
        position: relative;
        left: 20px;
        height: 26px;
        width: 26px;
        border-radius: 25%;
        cursor: pointer;
        color: black;
    }
</style>
<body>
    <nav class="sidebar close">
        <header>
            <div class="logo">
                <a href="Dashboard.php" class="logo"><i class="fab fa-accusoft"></i><span>DEAN</span></a>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i><input type="text" placeholder="Chercher...">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="Dashboard.php"><i class='bx bx-home-alt icon' ></i><span class="text nav-text">Tableau de bord</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="Profil.php"><i class="fa fa-users icon" aria-hidden="true"></i><span class="text nav-text">Profil</span></a>
                    </li>
                    <li class="nav-link">
                        <a href=""><i class="fa fa-comment icon" aria-hidden="true"></i>  <span class="text nav-text">Message</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="InscriptionProf.php"><i class="fa fa-sticky-note-o icon" aria-hidden="true"></i><span class="text nav-text">Inscription Profs</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="Info_Etu.php"><i class="fa fa-file-archive-o icon" aria-hidden="true"></i><span class="text nav-text">Info d'étudiants</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="Info_Prof.php"><i class="fa fa-file-archive-o icon" aria-hidden="true"></i><span class="text nav-text">Info des profs</span></a>
                    </li>
                    <li class="nav-link">
                        <a href=""><i class="fa fa-file-archive-o icon" aria-hidden="true"></i><span class="text nav-text">Contact des partenaire</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="AttestationRequis.php"><i class="fa fa-sticky-note-o icon" aria-hidden="true"></i><span class="text nav-text">Document Demandé</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="Modifier.php"><i class="fa fa-cogs icon" aria-hidden="true"></i><span class="text nav-text">Modifier</span></a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="Logout.php"><i class='bx bx-log-out icon' ></i><span class="text nav-text">Déconnecter</span></a>
                </li>
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i><i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Mode sombre</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>  
            </div>
        </div>
    </nav>
    <section class="home home2">  
        <div class="container1">
            <div class="box1">
                <div class="mini-box1">
                    <img src="image/blockchaine1.jpg" alt="image">
                    <div class="box-formation">
                        <div class="con">
                            <h4>ID : </h4>
                            <label><?php echo $ID_Admin;?></label>
                        </div>
                        <div class="con">
                            <h4>Prenom et nome : </h4>
                            <label><?php echo $Prenom_Admin.' '.$Nom_Admin;?></label>
                            <form action="" method="post"><button type="submit" value="<?php echo $Prenom_Admin;?>" name="mod" class="mod">✎</button></form>
                        </div>
                        <div class="con">
                            <h4>Adresse mail : </h4>
                            <label><?php echo $Email_Admin;?></label>
                            <form action="" method="post"><button type="submit" value="<?php echo $Email_Admin;?>" name="mod" class="mod">✎</button></form>
                        </div>
                        <div class="con">
                            <h4>mote de passe : </h4>
                            <label><?php echo md5($Password_Admin);?></label>
                            <form action="" method="post"><button type="submit" value="<?php echo $Password_Admin; ?>" name="mod" class="mod">✎</button></form>
                        </div>
                    </div>
                </div>
                <div class="mini-box2">
                    <div class="mini-box3">
                        <div class="con2">
                                <h4>Pays de résidence :</h4>
                                <label><?php echo $Pays_Admin;?></label>
                                <form action="" method="post"><button type="submit" value="<?php echo $Pays_Admin;?>" name="mod" class="mod">✎</button></form>
                            </div>
                            <div class="con2">
                                <h4>Ville :</h4>
                                <label><?php echo $Ville_Admin;?></label>
                                <form action="" method="post"><button type="submit" value="<?php echo $Ville_Admin;?>" name="mod" class="mod">✎</button></form>
                            </div>
                            <div class="con2">
                                <h4>Numero de Téléphone :</h4>
                                <label ><?php echo $NumPhone_Admin;?></label>
                                <form action="" method="post"><button type="submit" value="<?php echo $NumPhone_Admin ;?>" name="mod" class="mod">✎</button></form>
                            </div>
                            <div class="con2">
                                <h4>Gender :</h4>
                                <label ><?php echo $Gender_Admin;?></label>
                            </div>
                            <div class="con2">
                                <h4>Situation familiale :</h4>
                                <label ><?php echo $SituationFam_Admin;?></label>
                                <form action="" method="post"><button type="submit" value="<?php echo $SituationFam_Admin;?>" name="mod" class="mod">✎</button></form>
                            </div>
                    </div>
                    <div class="mini-box4">
                            <h5> - Information de paiement - </h5>
                            <div class="info-banque">
                                <div class="info">
                                    <h4>Banque : </h4>
                                    <label ><?php echo $Info_BankAdmin['NamBank'];?></label>
                                    <form action="" method="post"><button type="submit" value="<?php echo $Info_BankAdmin['NamBank'];?>" name="mod" class="mod">✎</button></form>
                                </div>
                                <div class="info">
                                    <h4>Carte numérotée: </h4>
                                    <label ><?php echo $Info_BankAdmin['NumberCard'];?></label>
                                    <form action="" method="post"><button type="submit" value="<?php echo $Info_BankAdmin['NumberCard'];?>" name="mod" class="mod">✎</button></form>
                                </div>
                                <div class="info">
                                    <h4>CVV : </h4>
                                    <label ><?php echo $Info_BankAdmin['CVV'];?></label>
                                    <form action="" method="post"><button type="submit" value="<?php echo $Info_BankAdmin['CVV'];?>" name="mod" class="mod">✎</button></form>
                                </div>
                                <div class="info">
                                    <h4>Date : </h4>
                                    <label >03/26</label>
                                    <form action="" method="post"><button type="submit" value="" name="mod" class="mod">✎</button></form>
                                </div>
                                <div class="info">
                                    <h4>IBAN : </h4>
                                    <label ><?php echo $Info_BankAdmin['IBAN'];?></label>
                                    <form action="" method="post"><button type="submit" value="<?php echo  $Info_BankAdmin['IBAN'];?>" name="mod" class="mod">✎</button></form>
                                </div>
                                <div class="info">
                                    <h4>Devise : </h4>
                                    <label > USD ( USD ) </label>
                                </div>
                                <div class="info">
                                    <h4>A été payé : </h4>
                                    <label ><?php  echo $Info_BankAdmin['StatusPays'];?></label>
                                </div>
                            </div>
                     </div>
                    </div>
                    <div class="connexion"> 
                        <div class="box-conn">
                            <h3>Premier accès au site</h3>
                            <label><?php echo $PremierAccesAuSite;?></label>
                        </div>
                        <div class="box-conn">
                            <h3>Dernier accès au site</h3>
                            <label><?php echo date("l d M Y h:i:sa");?></label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div></div>
    </section>
    <script src="JS/js.js"></script>    
</body>
</html>