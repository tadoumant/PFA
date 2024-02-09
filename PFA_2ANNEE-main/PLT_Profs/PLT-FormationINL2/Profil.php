<?php
    $date=date("l d M Y h:i:sa");
    $userDB="root";
    $passwordDB="root";
    $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    $formationary=array("1"=>"MANAGEMENT DES ENTREPRISES (BAC+3)",
                        "2"=>"AUDIT ET CONTRÔLE DE GESTION (BAC+5)",
                        "3"=>"MARKETING STRATÉGIQUE ET OPÉRATIONNEL (BAC+5))",
                        "4"=>"MANAGEMENT DES SYSTÈMES ET TECHNOLOGIES DE L’INFORMATION ET DE COMMUNICATION (BAC+5",
                        "5"=>"MANAGEMENT INDUSTRIEL ET LOGISTIQUE (MIL, BAC+3)",
                        "6"=>"INGÉNIERIE INDUSTRIELLE ET LOGISTIQUE (IIL, BAC+5)",
                        "7"=>"INGÉNIERIE DES SYSTÈMES INFORMATIQUES (BAC+3)",
                        "8"=>"INGÉNIERIE DES SYSTÈMES D’INFORMATION (BAC+5)",
                        "9"=>"INGÉNIERIE DES SYSTÈMES RÉSEAUX ET TÉLÉCOMS (BAC+5)",
                        "10"=>"INGÉNIERIE DES SYSTÈMES EMBARQUÉS MOBILES (BAC+5)",
                        "11"=>"DEVELOPPEUR BLOCKCHAIN & SMART CONTRACTS",
                        "12"=>"FORMATION DATA SCIENCE",
                        "13"=>"FORMATION MARKETING DIGITAL",
                        "14"=>"FORMATION SECURITE INFORMATIQUE",
    );
    session_start();
        $_SESSION['ID_Prof'];
        $_SESSION['Prenom_Prof'];
        $_SESSION['Nom_Prof'];
        $_SESSION['NationaliteID_Prof'];
        $_SESSION['Email_Prof'];
        $_SESSION['Pays_Prof'];
        $_SESSION['Ville_Prof'];
        $_SESSION['NumPhone_Prof'];
        $_SESSION['SituationFam_Prof'];
        $_SESSION['Formation_Prof'];
        $_SESSION['PremierDateEmbauche'];
        $_SESSION['Gender_Prof'];
        $_SESSION['Password_Prof'];
        $_SESSION['PremierAccesAuSite'];
        $_SESSION['statusProf'];
    if (array_key_exists($_SESSION['Formation_Prof'], $formationary)) {
        $for=$formationary[$_SESSION['Formation_Prof']];

    }
    session_start();
    $ID_Prof=$_SESSION['ID_Prof'];
        $check2=$database->prepare("SELECT * FROM Profs WHERE ID_Prof='$ID_Prof' " );
            $check2->execute();
            if($check2->rowCount() === 1){
                foreach($check2 as $check2){
                    $ID_Prof1=$check2['ID_Prof'];
                    $Prenom_Prof=$check2['Prenom_Prof'];
                    $Nom_Prof=$check2['Nom_Prof'];
                    $NationaliteID_Prof=$check2['NationaliteID_Prof'];
                    $Email_Prof=$check2['Email_Prof'];
                    $Pays_Prof=$check2['Pays_Prof'];
                    $NumPhone_Prof=$check2['NumPhone_Prof'];
                    $Ville_Prof=$check2['Ville_Prof'];
                    $SituationFam_Prof=$check2['SituationFam_Prof'];
                    $Formation_Prof=$check2['Formation_Prof'];
                    $PremierDateEmbauche=$check2['PremierDateEmbauche'];
                    $Gender_Prof=$check2['Gender_Prof'];
                    $Password_Prof=$check2['Password_Prof']; 
                    $PremierAccesAuSite=$check2['PremierAccesAuSite']; 
                    $statusProf=$check2['statusProf']; 
                }
                if (array_key_exists($_SESSION['formation'], $formationary)) {
                    $for=$formationary[$_SESSION['formation']];
                }
            }
            if(isset($_REQUEST['mod1'])){
                $Prenom_Prof=$_REQUEST['Prenom_Prof'];
                $Nom_Prof=$_REQUEST['Nom_Prof'];
                $update=$database->prepare("UPDATE  Profs SET  Prenom_Prof='$Prenom_Prof', Nom_Prof='$Nom_Prof' WHERE ID_Prof= '$ID_Prof' ");
                if($update->execute()){
                }else{header("refresh:1;url=Profil.php");}
            }elseif(isset($_REQUEST['mod2'])){
                $Password_Prof=$_REQUEST['Password_Prof'];
                $update=$database->prepare("UPDATE  Profs SET  Password_Prof='$Password_Prof' WHERE ID_Prof= '$ID_Prof' ");
                if($update->execute()){
                }else{header("refresh:1;url=Profil.php");}
            }elseif(isset($_REQUEST['mod3'])){
                $Pays_Prof=$_REQUEST['Pays_Prof'];
                $update=$database->prepare("UPDATE  Profs SET  Pays_Prof='$Pays_Prof' WHERE ID_Prof= '$ID_Prof' ");
                if($update->execute()){
                }else{header("refresh:1;url=Profil.php");}
                
            }elseif(isset($_REQUEST['mod4'])){
                $Ville_Prof=$_REQUEST['Ville_Prof'];
                $update=$database->prepare("UPDATE  Profs SET  Ville_Prof='$Ville_Prof' WHERE ID_Prof= '$ID_Prof' ");
                if($update->execute()){
                }else{header("refresh:1;url=Profil.php");}
                
            }












?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="CSS/Profil.css">
    <link rel="stylesheet" href="CSS/1.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>
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
                <li class="search-box"><i class='bx bx-search icon'></i><input type="text" placeholder="Chercher..."></li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="Dashboard.php"><i class='bx bx-home-alt icon' ></i><span class="text nav-text">Tableau de bord</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="Profil.php"><i class="fa fa-users icon" aria-hidden="true"></i><span class="text nav-text">Profil</span></a>
                    </li>
                    <li class="nav-link">
                        <a href=""><i class="fa fa-comment icon" aria-hidden="true"></i><span class="text nav-text">Message</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="Info_Etu.php"><i class="fa fa-file-archive-o icon" aria-hidden="true"></i><span class="text nav-text"> Etudiants</span></a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="Logout.php"><i class='bx bx-log-out icon' ></i><span class="text nav-text">Déconnecter</span></a>
                </li>
                <li class="mode">
                    <div class="sun-moon"><i class='bx bx-moon icon moon'></i><i class='bx bx-sun icon sun'></i></div>
                    <span class="mode-text text">Mode sombre</span>
                    <div class="toggle-switch"><span class="switch"></span></div>
                </li>
            </div>
        </div>
    </nav>
    <section class="home home2"> 
        <div class="Info-g">
            <div class="Info">
                <h3 class="title-g">Informations détaillées</h3>
                <div class="box-top">
                    <div class="mini-box1">
                        <img src="22ee25f8e3_50030449_fotolia-25828130-s-page42.jpg" alt="image">
                        <div class="box-formation">
                            <h4>ID : <?php echo $_SESSION['ID_Prof'];?></h4>
                            <h4>ID Nationalite  : <?php echo $_SESSION['NationaliteID_Prof'];?></h4>
                            <h4>Prenom et nome : <?php echo $_SESSION['Prenom_Prof'].' '.$_SESSION['Nom_Prof'];?></h4>
                            <h4>Adresse mail : <?php echo $_SESSION['Email_Prof'];?></h4>
                            <h4>mote de passe : <?php echo md5($_SESSION['Password_Prof']);?></h4>
                        </div>
                    </div>
                    <div class="mini-box2">
                        <h4>Pays de résidence: <?php echo $_SESSION['Pays_Prof'];?></h4>
                        <h4>Ville : <?php echo $_SESSION['Ville_Prof'];?></h4>
                        <h4>Numero de Téléphone : <?php echo $_SESSION['NumPhone_Prof'];?></h4>
                        <h4>Situation familler  : <?php echo $_SESSION['SituationFam_Prof'];?></h4>
                        <h4>Gender : <?php echo $_SESSION['Gender_Prof'];?></h4>
                        <h4>Formation demandée : <?php echo $for;?></h4>
                        <h4>Premier Date Embauche : <?php echo $_SESSION['PremierDateEmbauche'];?></h4>
                        <h4>status  : <?php echo $_SESSION['statusProf'];?></h4>
                    </div>
                </div>
            </div>
            <div class="connexion">
                <h3 class="title-g">Informations de connexion</h3>
                <div class="box-connexion">
                    <h3>Premier accès au site</h3>
                    <p> <?php echo $_SESSION['PremierAccesAuSite'];?></p>
                    <h3>Dernier accès au site</h3>
                    <p><?php echo $date;?></p>
                </div>

            </div>
        </div>
        <div class="cours">
            <h3 class="title-g">Informations détaillées du cours</h3>
            <div class="box-cours">
                <h4>Profils de cours</h4>
                <div class="cour">
                    <a href="#">SEMESTRE 7:</a>    
                    <a href="#"> - Automates Programmables industriels</a>    
                    <a href="#"> - Logistique Industrielle et Transport</a>    
                    <a href="#"> - Conception et fabrication assistées par ordinateurs (CFAO)</a>    
                    <a href="#"> - Réseaux Locaux Industriels</a>    
                    <a href="#"> - Mathématiques et Finances pour l’ingénieur</a>    
                    <a href="#"> - Techniques de communication :( Français – Anglais )</a>    
                    <a href="#">SEMESTRE 8:</a>  
                    <a href="#"> - Systèmes d’Information Décisionnels</a>    
                    <a href="#"> - Simulation industrielle et logistique</a>    
                    <a href="#"> - Management industriel :(GPAO) / (GMAO)</a>    
                    <a href="#"> - Gestion des Achats et de l’Approvisionnement et Sureté de Fonctionnement</a>    
                    <a href="#"> - Supervisons industrielle et MES</a> 
                    <a href="#"> - Techniques de communication :( Français – Anglais )</a>       
                    <a href="#"> - Projet de Fin d’Année</a>      
                    <a href="#">SEMESTRE 9:</a>  
                    <a href="#"> - Supply Chain Management et Techniques du commerce et des affaires internationales</a>    
                    <a href="#"> - Lean Management et Six Sigma</a>    
                    <a href="#"> - Qualité et Management des Risques</a>    
                    <a href="#"> - Management Visuel et Tableau de Bord</a>    
                    <a href="#"> - E_Logistique et Industrie 4.0</a>    
                    <a href="#"> - Projets Industriels et Logistiques</a>    
                    <a href="#">SEMESTRE 10:</a>  
                    <a href="#"> - Projet de Fin d’Etudes</a>    
                </div>
            </div>
        </div>
    </section>
    <script src="JS/js.js"></script>    
</body>
</html>