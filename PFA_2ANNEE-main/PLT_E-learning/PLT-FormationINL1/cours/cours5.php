<?php
    $userDB="root";
    $passwordDB="root";
    $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    $AffichierCour=$database->prepare("SELECT * FROM Cours WHERE ID_Formation='5' ");
    if($AffichierCour->execute()){
        foreach($AffichierCour as $AffichierCour){
            if($AffichierCour['ID_Mat'] == 'F5-32'){
                $F5_32=$AffichierCour['Position'];
            }elseif($AffichierCour['ID_Mat'] == 'F5-33'){
                $F5_33=$AffichierCour['Position'];
            }elseif($AffichierCour['ID_Mat'] == 'F5-34'){
                $F5_34=$AffichierCour['Position'];
            }elseif($AffichierCour['ID_Mat'] == 'F5-35'){
                $F5_35=$AffichierCour['Position'];
            }elseif($AffichierCour['ID_Mat'] == 'F5-36'){
                $F5_36=$AffichierCour['Position'];
            }elseif($AffichierCour['ID_Mat'] == 'F5-37'){
                $F5_37=$AffichierCour['Position'];
            }elseif($AffichierCour['ID_Mat'] == 'F5-38'){
                $F5_38=$AffichierCour['Position'];
            }
        }
    $F5=' - Cours - ';
    }else{
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="Dashboard.css">
    <link rel="stylesheet" href="cours1.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="logo">
                <a href="../Dashboard.php" class="logo">
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
                        <a href="../Dashboard.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Tableau de bord</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Profil.php">
                            <i class="fa fa-users icon" aria-hidden="true"></i>
                            <span class="text nav-text">Profil</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="">
                            <i class="fa fa-comment icon" aria-hidden="true"></i>  
                            <span class="text nav-text">Message</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Note.php">
                            <i class="fa fa-sticky-note-o icon" aria-hidden="true"></i>
                            <span class="text nav-text">Note</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../attestation.php">
                            <i class="fa fa-file-archive-o icon" aria-hidden="true"></i>
                            <span class="text nav-text">Demande d'une attestation</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="">
                            <i class="fa fa-cogs icon" aria-hidden="true"></i>
                            <span class="text nav-text">Paramètre</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="">
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
    <section class="home home5"> 
        <div class="contant">
            <table>
                    <tr><td>
                        <a href="#">Achat, approvisionnement et chaîne logistique</a>
                        <a href="<?php echo $F5_32;?>" class="sapn"><?php echo $F5; ?></a>
                    </td</tr>
                    <tr><td>
                        <a href="#">Procédés de fabrication et risques industriels</a>
                        <a href="<?php echo $F5_33;?>" class="sapn"><?php echo $F5; ?></a>
                    </td</tr>
                    <tr><td>
                        <a href="#">Logistique, Transport, Gestion des Entrepôts et Distribution</a>
                        <a href="<?php echo $F5_34;?>" class="sapn"><?php echo $F5; ?></a>
                    </td</tr>
                    <tr><td>
                        <a href="#">Analyse des données</a>
                        <a href="<?php echo $F5_35;?>" class="sapn"><?php echo $F5; ?></a>
                    </td</tr>
                    <tr><td>
                        <a href="#">Systèmes d’information appliqués à la gestion des flux</a>
                        <a href="<?php echo $F5_36;?>" class="sapn"><?php echo $F5; ?></a>
                    </td</tr>
                    <tr><td>
                        <a href="#">Techniques de Communication : Français – Anglais</a>
                        <a href="<?php echo $F5_37;?>" class="sapn"><?php echo $F5; ?></a>
                    </td</tr>
                    <tr><td>
                        <a href="#"></a>
                        <a href="<?php echo $F5_38;?>" class="sapn"><?php echo $F5; ?></a>
                    </td</tr>
                    
                </table>

        </div>
    </section>


<script src="js.js"></script>    
</body>
</html>