<?php
    $userDB="root";
    $passwordDB="root";
    $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    $check=$database->prepare("SELECT * FROM Profs" );
    $check->execute();
    session_start();
    if(isset($_REQUEST['Update'])){
        $ID_Prof=$_SESSION['ID_Prof'];
        $info=$_REQUEST['info'];
        $value=$_REQUEST['value'];
        if($info == '1'){
            $update=$database->prepare("UPDATE  Profs SET  Prenom_Prof='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }elseif($info == '2'){
            $update=$database->prepare("UPDATE  Profs SET  Nom_Prof='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }elseif($info == '3'){
            $update=$database->prepare("UPDATE  Profs SET  NationaliteID_Prof='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }elseif($info == '4'){
            $update=$database->prepare("UPDATE  Profs SET  Email_Prof='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }elseif($info == '5'){
            $update=$database->prepare("UPDATE  Profs SET  Pays_Prof='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }elseif($info == '6'){
            $update=$database->prepare("UPDATE  Profs SET  Ville_Prof='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }elseif($info == '7'){
            $update=$database->prepare("UPDATE  Profs SET  NumPhone_Prof='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }elseif($info == '8'){
            $update=$database->prepare("UPDATE  Profs SET  SituationFam_Prof='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }elseif($info == '9'){
            $update=$database->prepare("UPDATE  Profs SET  Formation_Prof='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }elseif($info == '10'){
            $update=$database->prepare("UPDATE  Profs SET  PremierDateEmbauche='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }elseif($info == '11'){
            $update=$database->prepare("UPDATE  Profs SET  Gender_Prof='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }elseif($info == '12'){
            $update=$database->prepare("UPDATE  Profs SET  Password_Prof='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }elseif($info == '13'){
            $update=$database->prepare("UPDATE  Profs SET  PremierAccesAuSite='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }
        elseif($info == '14'){
            $update=$database->prepare("UPDATE  Profs SET  statusProf='$value' WHERE ID_Prof= '$ID_Prof' ");
            if($update->execute()){
                header("refresh:1;url=Info_Prof.php");
            }else{header("refresh:1;url=UpdateProf.php");}
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatin d'Profs </title>
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <link rel="stylesheet" href="CSS/Note.css">
    <link rel="stylesheet" href="CSS/infoEtu.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="icon" href="../Capture d’écran 2022-07-17 à 03.37.57.png">
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
    <section class="home home4"> 
        <div class="contant">
            <h3>Informatin d'Profs : </h3>
                <table class="table">
                    <tr>
                    <th>ID</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>NationaliteID</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>SituationFam</th>
                    <th>Formation</th>
                    <th>Gender</th>
                    <th>Pays</th>
                    <th>Ville</th>
                    <th>Action</th>
                    </tr>
                    <?php foreach($check as $ch):?>
                        <tr>
                            <td><?php echo $ch['ID_Prof'];?></td>
                            <td><?php echo $ch['Prenom_Prof'];?></td>
                            <td><?php echo $ch['Nom_Prof'];?></td>
                            <td><?php echo $ch['NationaliteID_Prof'];?></td>
                            <td><?php echo $ch['NumPhone_Prof'];?></td>
                            <td><?php echo $ch['Email_Prof'];?></td>
                            <td><?php echo $ch['SituationFam_Prof'];?></td>
                            <td><?php echo $ch['Formation_Prof'];?></td>
                            <td><?php echo $ch['Gender_Prof'];?></td>
                            <td><?php echo $ch['Pays_Prof'];?></td>
                            <td><?php echo $ch['Ville_Prof'];?></td>
                            <td>
                                 <form action="" class="input">
                                    <button type="submit" class="Update"  name="Update1" value="<?php echo $ch['ID_Prof'];?>">Update</button>
                                    <button type="submit" class="Delet"  name="Delet" value="<?php echo $ch['ID_Prof'];?>">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table>
                <div class="content_Update">
                    <div class="box_Update">
                        <div class="header">
                            <p></p>
                            <a href="Info_Prof.php"><i class="uil uil-times"></i></a>
                        </div> 
                        <form action="UpdateProf.php" method="POST">
                            <div class="Info">
                                <label>Information spécifique</label>
                                <select name="info"  tabindex="-1"  aria-hidden="true">
                                    <option value="" selected="">-None-</option>
                                    <option value="1">Prenom Prof</option>
                                    <option value="2">Nom Prof</option>
                                    <option value="3">NationaliteID Prof</option>
                                    <option value="4">Email Prof </option>
                                    <option value="5">Pays Prof</option>
                                    <option value="6">Ville Prof</option>
                                    <option value="7">NumPhone Prof</option>
                                    <option value="8">SituationFam Prof</option>
                                    <option value="9">Formation Prof</option>
                                    <option value="10">Premier Date Embauche </option>
                                    <option value="11">Gender Prof</option>
                                    <option value="12">Password Prof</option>
                                    <option value="13">1er Acces Au Site</option>
                                    <option value="14">statusProf</option>

                                </select>
                            </div>
                            <div class="row description">
                                    <label>Nouvelle valeur</label>
                                    <textarea spellcheck="false" name="value"></textarea>
                            </div>
                            <input type="submit" name="Update" class="button">
                        </form>
                    </div>
                </div>
                <script src="JS/Info_Etu.js"></script>
        </div>
    </section>
    <script src="JS/js.js"></script>    
</body>
</html>

