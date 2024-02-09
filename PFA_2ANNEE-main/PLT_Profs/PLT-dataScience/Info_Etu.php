<?php
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
    $userDB="root";
    $passwordDB="root";
    $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    $check=$database->prepare("SELECT * FROM Etudiants WHERE Formation_Etu = '12' " );
    $check->execute();
    session_start();
    if(isset($_REQUEST['ID_EtuSub'])){
        $_SESSION['ID_Etud']= $_REQUEST['ID_Etud'];
        header("refresh:1;url=Note_Etu.php");;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatin d'etudiants </title>
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <link rel="stylesheet" href="CSS/Note.css">
    <link rel="stylesheet" href="CSS/infoEtu.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
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
                        <a href="">
                            <i class="fa fa-comment icon" aria-hidden="true"></i>  
                            <span class="text nav-text">Message</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="Info_Etu.php">
                            <i class="fa fa-file-archive-o icon" aria-hidden="true"></i>
                            <span class="text nav-text"> Etudiants</span>
                        </a>
                    </li>
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
    <section class="home home4"> 
        <div class="contant">
            <h3>Informatin d'etudiants : </h3>
                <table class="table">
                    <tr class="titleTable">
                    <th>ID</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Formation</th>
                    <th>status</th>
                    <th>add note</th>
                    </tr>
                    <?php foreach($check as $ch):
                            $ID_Etu=$ch['ID_Etu'];
                            $Prenom_Etu=$ch['Prenom_Etu'];
                            $Nom_Etu=$ch['Nom_Etu'];
                            $Email_Etu=$ch['Email_Etu'];
                            $NumPhone_Etu=$ch['NumPhone_Etu'];
                        ?>
                        <?php 
                            if (array_key_exists($ch['Formation_Etu'], $formationary)) {
                                $for=$formationary[$ch['Formation_Etu']];
                            }
                            if($ch['statusEtu'] == 'Active now'){
                                $class="statusActiv";
                            }elseif($ch['statusEtu'] == 'Offline now'){$class="statusOff";}
                        ?>
                        <tr class="ValueTable">
                            <td><?php echo $ID_Etu;?></td>
                            <td><?php echo $Prenom_Etu;?></td>
                            <td><?php echo $Nom_Etu;?></td>
                            <td><?php echo $Email_Etu;?></td>
                            <td><?php echo $NumPhone_Etu;?></td>
                            <td><?php echo $for;?></td>
                            <td class="<?php echo $class;?>"><?php echo $ch['statusEtu'];?></td>
                            <td>
                            <form action="Info_Etu.php" class="" method="post">
                                <input type="text" name="ID_Etud" value="<?php echo $ID_Etu;?>" style="display: none;">
                                <button type="submit" name="ID_EtuSub" value="">Add Note</button>
                            </form>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table>
        </div>
    </section>
    <script src="JS/js.js"></script>    
</body>
</html>

<!-- style="display: none;" -->