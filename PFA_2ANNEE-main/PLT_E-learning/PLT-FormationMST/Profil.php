<?php
    $userDB="root";
    $passwordDB="root";
    $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    $date=date("l d M Y h:i:sa");
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
    $unique_id=$_SESSION['ID_Etu'];
        $check2=$database->prepare("SELECT * FROM Etudiants WHERE ID_Etu='$unique_id' " );
            $check2->execute();
            if($check2->rowCount() === 1){
                foreach($check2 as $check2){
                    $Prenom_Etu=$check2['Prenom_Etu'];
                    $Nom_Etu=$check2['Nom_Etu'];
                    $Pays_Etu=$check2['Pays_Etu'];
                    $Ville_Etu=$check2['Ville_Etu'];
                    $NumPhone_Etu=$check2['NumPhone_Etu'];
                    $Formation_Etu=$check2['Formation_Etu'];
                    $Email_Etu=$check2['Email_Etu'];
                    $SerieBAC_Etu=$check2['SerieBAC_Etu'];
                    $Niveau_Etu=$check2['Niveau_Etu'];
                    $Password_Etu=$check2['Password_Etu'];
                    $PremierAccesAuSite=$check2['PremierAccesAuSite']; 

                }
                if (array_key_exists($_SESSION['formation'], $formationary)) {
                    $for=$formationary[$_SESSION['formation']];
                }
            }
            if(isset($_REQUEST['mod1'])){
                $Prenom_Etu=$_REQUEST['Prenom_Etu'];
                $Nom_Etu=$_REQUEST['Nom_Etu'];
                $update=$database->prepare("UPDATE  Etudiants SET  Prenom_Etu='$Prenom_Etu', Nom_Etu='$Nom_Etu' WHERE ID_Etu= '$unique_id' ");
                if($update->execute()){
                }else{header("refresh:1;url=Profil.php");}
            }elseif(isset($_REQUEST['mod2'])){
                $Password_Etu=$_REQUEST['Password_Etu'];
                $update=$database->prepare("UPDATE  Etudiants SET  Password_Etu='$Password_Etu' WHERE ID_Etu= '$unique_id' ");
                if($update->execute()){
                }else{header("refresh:1;url=Profil.php");}
            }elseif(isset($_REQUEST['mod3'])){
                $Pays_Etu=$_REQUEST['Pays_Etu'];
                $update=$database->prepare("UPDATE  Etudiants SET  Pays_Etu='$Pays_Etu' WHERE ID_Etu= '$unique_id' ");
                if($update->execute()){
                }else{header("refresh:1;url=Profil.php");}
                
            }elseif(isset($_REQUEST['mod4'])){
                $Ville_Etu=$_REQUEST['Ville_Etu'];
                $update=$database->prepare("UPDATE  Etudiants SET  Ville_Etu='$Ville_Etu' WHERE ID_Etu= '$unique_id' ");
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
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <link rel="stylesheet" href="CSS/Profil.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
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
        .m{
            display: flex;
        }
        :is(.form1 , .form2 ,.form3 , .form4){
            display: flex;
            margin-left: 10px;
        }
        :is(.form1 , .form2 ,.form3 , .form4) input{
            width: 12rem;
            height: 29px;
            font-size: 15px;
            opacity: 0;
            display: none;
        }
        :is(.form1.active , .form2.active ,.form3.active , .form4.active) input{
            opacity: 1;
            pointer-events: auto;
            display: block;
        }
        :is(.form1 , .form2 ,.form3 , .form4) .inputMod{
            width: 2rem;
            height: 29px;
            font-size: 21px;
            background-color: transparent;
            color: black;
            display:none;
        }
        :is(.form1.active , .form2.active ,.form3.active , .form4.active) .inputMod{
            display:block;
        }
        .active h1{
            display: none;
        }
        .n{
            position: relative;
            bottom: 19px;
            width: 9rem;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="logo">
                <a href="Dashboard.php" class="logo">
                    <i class="fab fa-accusoft"></i>
                    <span>DEAN</span>
                </a>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Chercher...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="Dashboard.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Tableau de bord</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Profil.php">
                            <i class="fa fa-users icon" aria-hidden="true"></i>
                            <span class="text nav-text">Profil</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="Paiement.php">
                        <i class="fa fa-credit-card-alt icon" aria-hidden="true"></i>
                            <span class="text nav-text">Paiement</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <i class="fa fa-comment icon" aria-hidden="true"></i>  
                            <span class="text nav-text">Message</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Note.php">
                            <i class="fa fa-sticky-note-o icon" aria-hidden="true"></i>
                            <span class="text nav-text">Note</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="attestation.php">
                            <i class="fa fa-file-archive-o icon" aria-hidden="true"></i>
                            <span class="text nav-text">Demande d'une attestation</span>
                        </a>
                    </li>
                <!-- 
                    <li class="nav-link">
                        <a href="Paramètre.php">
                            <i class="fa fa-cogs icon" aria-hidden="true"></i>
                            <span class="text nav-text">Paramètre</span>
                        </a>
                    </li> -->
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="Logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Déconnecter</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
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
        <div class="Info-g">
            <div class="Info">
                <h3 class="title-g">Informations détaillées</h3>
                <div class="box-top">
                    <div class="mini-box1">
                        <img src="22ee25f8e3_50030449_fotolia-25828130-s-page42.jpg" alt="image">
                        <div class="box-formation">
                            <h4>ID : <?php echo $unique_id;?></h4>
                            <div class="m">
                                <h4>Prenom et nome : <?php echo $Prenom_Etu.' '.$Nom_Etu;?></h4>
                                <form action="" class="form1">
                                    <div>
                                        <input type="text" class="n " name="Prenom_Etu" value="<?php echo $Prenom_Etu;?>" placeholder="Prenom Etu" required>
                                        <input type="text" class="n " name="Nom_Etu" value="<?php echo $Nom_Etu;?>" placeholder="Nom Etu" required>
                                    </div>
                                    <h1>✎</h1>
                                    <button type="submit" value="<?php echo $Prenom_Admin;?>" name="mod1" class="inputMod">✎</button>
                                </form>
                            </div>
                            <h4>Adresse mail : <?php echo $Email_Etu;?></h4>
                            <div class="m">
                                <h4>mote de passe : <?php echo md5($Password_Etu);?></h4>
                                <form action="" class="form2">
                                    <input type="text" class="input2 " value="<?php echo $Password_Etu;?>" name="Password_Etu" placeholder="Password Etu"  required>
                                    <h1>✎</h1>
                                    <button type="submit" value="<?php echo $Password_Etu;?>" name="mod2" class="inputMod">✎</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mini-box2">
                        <div class="m">
                            <h4>Pays de résidence: <?php echo $Pays_Etu;?></h4>
                            <form action="" class="form3">
                                <input type="text" class="input2 " value="<?php echo $Pays_Etu;?>" name="Pays_Etu" placeholder="Pays Etu" required>
                                <h1>✎</h1>
                                <button type="submit" value="<?php echo $Pays_Etu;?>" name="mod3" class="inputMod">✎</button>
                            </form>
                        </div>
                        <div class="m">
                            <h4>Ville : <?php echo $Ville_Etu;?></h4>
                            <form action="" class="form4">
                                    <input type="text" class="input2 " value="<?php echo $Ville_Etu;?>" name="Ville_Etu" placeholder="Ville Etu" required>
                                    <h1>✎</h1>
                                    <button type="submit" value="<?php echo $Ville_Etu;?>" name="mod4" class="inputMod">✎</button>
                                </form>
                        </div>
                        <h4>Numero de Téléphone : <?php echo $NumPhone_Etu;?></h4>
                        <h4>Serie du bac  : <?php echo $SerieBAC_Etu;?></h4>
                        <h4>Niveau d'études actuel : <?php echo $Niveau_Etu;?></h4>
                        <h4>Formation demandée : <?php echo $for;?></h4>
                    </div>
                </div>
            </div>
            <div class="connexion">
                <h3 class="title-g">Informations de connexion</h3>
                <div class="box-connexion">
                    <h3>Premier accès au site</h3>
                    <p><?php echo $PremierAccesAuSite;?></p>
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
                    <a href="#"> - Management des Projets</a>
                    <a href="#"> - Marketing International</a>
                    <a href="#"> - Audit des Procédures et Tableaux de Bord </a>
                    <a href="#"> - Finance Internationale</a>
                    <a href="#"> - Analyse de Données des Systèmes d’Information</a>
                    <a href="#"> - Techniques de Communication: Français – Anglais</a>
                    <a href="#">SEMESTRE 8:</a>   
                    <a href="#"> - Transformation Digitale</a>
                    <a href="#"> - Audit Comptable et Financier</a>
                    <a href="#"> - Commerce Electronique</a>
                    <a href="#"> - Audit Social et contrôle de Gestion Social</a>
                    <a href="#"> - Finance de marché : Gestion de Portefeuille</a>
                    <a href="#"> - Techniques Bancaires Avancées </p>
                    <a href="#"> - Audit du système d’information</a>
                    <a href="#"> - Techniques de Communication: Français – Anglais</a>
                    <a href="#"> - Projet de Fin d’Année</a>
                    <a href="#">SEMESTRE 9:</a>   
                    <a href="#"> - CRM : Management de la Relation Client</a>
                    <a href="#"> - Management des équipes et Gestion des conflits</a>
                    <a href="#"> - Marketing direct et Marketing des services</a>
                    <a href="#"> - Datamining</a>
                    <a href="#"> - Finance Avancée</a>
                    <a href="#"> - Contrôle de Gestion Approfondi</a>
                    <a href="#"> - Développement Personnel</a>
                    <a href="#"> - Méthodologie de Mémoire en Anglais</a> 
                    <a href="#">SEMESTRE 10:</a>    
                    <a href="#"> - Projet de Fin d’Etudes</a>
                    <a href="#"> - Séminaires</a>    
                </div>
            </div>

        </div> 
    </section>
    <script src="JS/1.js"></script>
    <script src="JS/js.js"></script>    
</body>
</html>