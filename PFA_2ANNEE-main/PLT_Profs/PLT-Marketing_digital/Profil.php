<?php
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
    if (array_key_exists($_SESSION['Formation_Prof'], $formationary)){$for=$formationary[$_SESSION['Formation_Prof']];}
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
                        <img src="image/4.png" alt="image">
                        <div class="box-formation">
                            <h4>ID : <?php echo $ID_Prof1;?></h4>
                            <h4>ID Nationalite  : <?php echo $NationaliteID_Prof;?></h4>
                            <div class="m">
                                <h4>Prenom et nome : <?php echo $Prenom_Prof.' '.$Nom_Prof;?></h4>
                                <form action="" class="form1">
                                        <div>
                                            <input type="text" class="n " name="Prenom_Prof" value="<?php echo $Prenom_Prof;?>" placeholder="Prenom Prof" required>
                                            <input type="text" class="n " name="Nom_Prof" value="<?php echo $Nom_Prof;?>" placeholder="Nom Prof" required>
                                        </div>
                                        <h1>✎</h1>
                                        <button type="submit" value="" name="mod1" class="inputMod">✎</button>
                                </form>
                            </div>
                            <h4>Adresse mail : <?php echo $Email_Prof;?></h4>
                            <div class="m">
                            <h4>mote de passe : <?php echo md5($Password_Prof);?></h4>
                                <form action="" class="form2">
                                    <input type="text" class="input2 " value="<?php echo $Password_Prof;?>" name="Password_Prof" placeholder="Password Prof"  required>
                                    <h1>✎</h1>
                                    <button type="submit" value="" name="mod2" class="inputMod">✎</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mini-box2">
                        <div class="m">
                            <h4>Pays de résidence: <?php echo $Pays_Prof;?></h4>
                            <form action="" class="form3">
                                <input type="text" class="input2 " value="<?php echo $Pays_Prof;?>" name="Pays_Prof" placeholder="Pays Prof" required>
                                <h1>✎</h1>
                                <button type="submit" value="" name="mod3" class="inputMod">✎</button>
                            </form>
                        </div>
                        <div class="m">
                            <h4>Ville : <?php echo $Ville_Prof;?></h4>
                            <form action="" class="form4">
                                    <input type="text" class="input2 " value="<?php echo $Ville_Prof;?>" name="Ville_Prof" placeholder="Ville Prof" required>
                                    <h1>✎</h1>
                                    <button type="submit" value="" name="mod4" class="inputMod">✎</button>
                                </form>
                        </div>
                        <h4>Numero de Téléphone : <?php echo $NumPhone_Prof;?></h4>
                        <h4>Situation familler  : <?php echo $SituationFam_Prof;?></h4>
                        <h4>Gender : <?php echo $Gender_Prof;?></h4>
                        <h4>Formation demandée : <?php echo $for;?></h4>
                        <h4>Premier Date Embauche : <?php echo $PremierDateEmbauche;?></h4>
                        <h4>status  : <?php echo $statusProf;?></h4>
                    </div>
                </div>
            </div>
            <div class="connexion">
                <h3 class="title-g">Informations de connexion</h3>
                <div class="box-connexion">
                    <h3>Premier accès au site</h3>
                    <p> <?php echo $PremierAccesAuSite;?></p>
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
                    <a href="#"> - Introduction au Marketing Digital</a>    
                    <a href="#"> - Médias Sociaux</a>    
                    <a href="#"> - Facebook Ads & Linkedin Ads</a>    
                    <a href="#"> - Conversion De Son Audience</a>    
                    <a href="#"> - Web Design Et Web Dev Pour Web Marketeurs</a>    
                    <a href="#"> - Référencement Payant</a>    
                    <a href="#"> - Affiliation</a>    
                    <a href="#"> - E-Mailing</a>    
                    <a href="#"> - Mesure De La Performance De Son Webmarketing</a>    
                    <a href="#"> - E-Commerce</a>      
                </div>
            </div>
        </div>
    </section>
    <script src="JS/js.js"></script>    
</body>
</html>