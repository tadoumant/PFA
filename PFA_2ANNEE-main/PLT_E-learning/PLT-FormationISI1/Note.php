<?php
    // BASE DE DONNEES
        $userDB="root";
        $passwordDB="root";
        $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    // BASE DE DONNEES
        session_start();
        $unique_id=$_SESSION['ID_Etu'];    
        $info=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='{$unique_id}' AND  ID_Formation='7' ");
        if($info->execute()){
            foreach($info as $info){
                if($info['ID_Mat']== "F7-1"){
                    $info1=$info['Note'];
                    if($info1== '-'){$clssCheck1='loging';
                    }elseif($info1 >= '10' ){$clssCheck1='Valide';
                    }elseif($info1 <  '10'){$clssCheck1='NoValide';}
                }elseif($info['ID_Mat']== "F7-2"){
                    $info2=$info['Note'];
                    if($info2== '-'){$clssCheck2='loging';
                    }elseif($info2 >= '10' ){$clssCheck2='Valide';
                    }elseif($info2 <  '10'){$clssCheck2='NoValide';}
                }elseif($info['ID_Mat']== 'F7-3'){
                    $info3=$info['Note'];
                    if($info3== '-'){$clssCheck3='loging';
                    }elseif($info3 >= '10' ){$clssCheck3='Valide';
                    }elseif($info3 <  '10'){$clssCheck3='NoValide';}
                }elseif($info['ID_Mat']== 'F7-4'){
                    $info4=$info['Note'];
                    if($info4== '-'){$clssCheck4='loging';
                    }elseif($info4 >= '10' ){$clssCheck4='Valide';
                    }elseif($info4 <  '10'){$clssCheck4='NoValide';}
                }elseif($info['ID_Mat']== 'F7-5'){
                    $info5=$info['Note'];
                    if($info5== '-'){$clssCheck5='loging';
                    }elseif($info5 >= '10' ){$clssCheck5='Valide';
                    }elseif($info5 <  '10'){$clssCheck5='NoValide';}
                }elseif($info['ID_Mat']== 'F7-6'){
                    $info6=$info['Note'];
                    if($info6== '-'){$clssCheck6='loging';
                    }elseif($info6 >= '10' ){$clssCheck6='Valide';
                    }elseif($info6 <  '10'){$clssCheck6='NoValide';}
                }elseif($info['ID_Mat']== 'F7-7'){
                    $info7=$info['Note'];
                    if($info7== '-'){$clssCheck7='loging';
                    }elseif($info7 >= '10' ){$clssCheck7='Valide';
                    }elseif($info7 <  '10'){$clssCheck7='NoValide';}
                }elseif($info['ID_Mat']== 'F7-8'){
                    $info8=$info['Note'];
                    if($info8== '-'){$clssCheck8='loging';
                    }elseif($info8 >= '10' ){$clssCheck8='Valide';
                    }elseif($info8 <  '10'){$clssCheck8='NoValide';}
                }elseif($info['ID_Mat']== 'F7-9'){
                    $info9=$info['Note'];
                    if($info9== '-'){$clssCheck9='loging';
                    }elseif($info9 >= '10' ){$clssCheck9='Valide';
                    }elseif($info9 <  '10'){$clssCheck9='NoValide';}
                }elseif($info['ID_Mat']== 'F7-10'){
                    $info10=$info['Note'];
                    if($info10== '-'){$clssCheck10='loging';
                    }elseif($info10 >= '10' ){$clssCheck10='Valide';
                    }elseif($info10 <  '10'){$clssCheck10='NoValide';}
                }elseif($info['ID_Mat']== 'F7-11'){
                    $info11=$info['Note'];
                    if($info11== '-'){$clssCheck11='loging';
                    }elseif($info11 >= '10' ){$clssCheck11='Valide';
                    }elseif($info11 <  '10'){$clssCheck11='NoValide';}
                }elseif($info['ID_Mat']== 'F7-12'){
                    $info12=$info['Note'];
                    if($info12== '-'){$clssCheck12='loging';
                    }elseif($info12 >= '10' ){$clssCheck12='Valide';
                    }elseif($info12 <  '10'){$clssCheck12='NoValide';}
                }elseif($info['ID_Mat']== 'F7-13'){
                    $info13=$info['Note'];
                    if($info13== '-'){$clssCheck13='loging';
                    }elseif($info13 >= '10' ){$clssCheck13='Valide';
                    }elseif($info13 <  '10'){$clssCheck13='NoValide';}
                }elseif($info['ID_Mat']== 'F7-14'){
                    $info14=$info['Note'];
                    if($info14== '-'){$clssCheck14='loging';
                    }elseif($info14 >= '10' ){$clssCheck14='Valide';
                    }elseif($info14 <  '10'){$clssCheck14='NoValide';}
                }elseif($info['ID_Mat']== 'F7-15'){
                    $info15=$info['Note'];
                    if($info15== '-'){$clssCheck15='loging';
                    }elseif($info15 >= '10' ){$clssCheck15='Valide';
                    }elseif($info15 <  '10'){$clssCheck15='NoValide';}
                }elseif($info['ID_Mat']== 'F7-16'){
                    $info16=$info['Note'];
                    if($info16== '-'){$clssCheck16='loging';
                    }elseif($info16 >= '10' ){$clssCheck16='Valide';
                    }elseif($info16 <  '10'){$clssCheck16='NoValide';}
                }elseif($info['ID_Mat']== 'F7-17'){
                    $info17=$info['Note'];
                    if($info17== '-'){$clssCheck17='loging';
                    }elseif($info17 >= '10' ){$clssCheck17='Valide';
                    }elseif($info17 <  '10'){$clssCheck17='NoValide';}
                }elseif($info['ID_Mat']== 'F7-18'){
                    $info18=$info['Note'];
                    if($info18== '-'){$clssCheck18='loging';
                    }elseif($info18 >= '10' ){$clssCheck18='Valide';
                    }elseif($info18 <  '10'){$clssCheck18='NoValide';}
                }elseif($info['ID_Mat']== 'F7-19'){
                    $info19=$info['Note'];
                    if($info19== '-'){$clssCheck19='loging';
                    }elseif($info19 >= '10' ){$clssCheck19='Valide';
                    }elseif($info19 <  '10'){$clssCheck19='NoValide';}
                }elseif($info['ID_Mat']== 'F7-20'){
                    $info20=$info['Note'];
                    if($info20== '-'){$clssCheck20='loging';
                    }elseif($info20 >= '10' ){$clssCheck20='Valide';
                    }elseif($info20 <  '10'){$clssCheck20='NoValide';}
                }elseif($info['ID_Mat']== 'F7-21'){
                    $info21=$info['Note'];
                    if($info21== '-'){$clssCheck21='loging';
                    }elseif($info21 >= '10' ){$clssCheck21='Valide';
                    }elseif($info21 <  '10'){$clssCheck21='NoValide';}
                }elseif($info['ID_Mat']== 'F7-22'){
                    $info22=$info['Note'];
                    if($info22== '-'){$clssCheck22='loging';
                    }elseif($info22 >= '10' ){$clssCheck22='Valide';
                    }elseif($info22 <  '10'){$clssCheck22='NoValide';}
                }elseif($info['ID_Mat']== 'F7-23'){
                    $info23=$info['Note'];
                    if($info23== '-'){$clssCheck23='loging';
                    }elseif($info23 >= '10' ){$clssCheck23='Valide';
                    }elseif($info23 <  '10'){$clssCheck23='NoValide';}
                }elseif($info['ID_Mat']== 'F7-24'){
                    $info24=$info['Note'];
                    if($info24== '-'){$clssCheck24='loging';
                    }elseif($info24 >= '10' ){$clssCheck24='Valide';
                    }elseif($info24 <  '10'){$clssCheck24='NoValide';}
                }elseif($info['ID_Mat']== 'F7-25'){
                    $info25=$info['Note'];
                    if($info25== '-'){$clssCheck25='loging';
                    }elseif($info25 >= '10' ){$clssCheck25='Valide';
                    }elseif($info25 <  '10'){$clssCheck25='NoValide';}
                }elseif($info['ID_Mat']== 'F7-26'){
                    $info26=$info['Note'];
                    if($info26== '-'){$clssCheck26='loging';
                    }elseif($info26 >= '10' ){$clssCheck26='Valide';
                    }elseif($info26 <  '10'){$clssCheck26='NoValide';}
                }elseif($info['ID_Mat']== 'F7-27'){
                    $info27=$info['Note'];
                    if($info27== '-'){$clssCheck27='loging';
                    }elseif($info27 >= '10' ){$clssCheck27='Valide';
                    }elseif($info27 <  '10'){$clssCheck27='NoValide';}
                }elseif($info['ID_Mat']== 'F7-28'){
                    $info28=$info['Note'];
                    if($info28== '-'){$clssCheck28='loging';
                    }elseif($info28 >= '10' ){$clssCheck28='Valide';
                    }elseif($info28 <  '10'){$clssCheck28='NoValide';}
                }elseif($info['ID_Mat']== 'F7-29'){
                    $info29=$info['Note'];
                    if($info29== '-'){$clssCheck29='loging';
                    }elseif($info29 >= '10' ){$clssCheck29='Valide';
                    }elseif($info29 <  '10'){$clssCheck29='NoValide';}
                }elseif($info['ID_Mat']== 'F7-30'){
                    $info30=$info['Note'];
                    if($info30== '-'){$clssCheck30='loging';
                    }elseif($info30 >= '10' ){$clssCheck30='Valide';
                    }elseif($info30 <  '10'){$clssCheck30='NoValide';}
                }elseif($info['ID_Mat']== 'F7-31'){
                    $info31=$info['Note'];
                    if($info31== '-'){$clssCheck31='loging';
                    }elseif($info31 >= '10' ){$clssCheck31='Valide';
                    }elseif($info31 <  '10'){$clssCheck31='NoValide';}
                }elseif($info['ID_Mat']== 'F7-32'){
                    $info32=$info['Note'];
                    if($info32== '-'){$clssCheck32='loging';
                    }elseif($info32 >= '10' ){$clssCheck32='Valide';
                    }elseif($info32 <  '10'){$clssCheck32='NoValide';}
                }elseif($info['ID_Mat']== 'F7-33'){
                    $info33=$info['Note'];
                    if($info33== '-'){$clssCheck33='loging';
                    }elseif($info33 >= '10' ){$clssCheck33='Valide';
                    }elseif($info33 <  '10'){$clssCheck33='NoValide';}
                }elseif($info['ID_Mat']== 'F7-34'){
                    $info34=$info['Note'];
                    if($info34== '-'){$clssCheck34='loging';
                    }elseif($info34 >= '10' ){$clssCheck34='Valide';
                    }elseif($info34 <  '10'){$clssCheck34='NoValide';}
                }elseif($info['ID_Mat']== 'F7-35'){
                    $info35=$info['Note'];
                    if($info35== '-'){$clssCheck35='loging';
                    }elseif($info35 >= '10' ){$clssCheck35='Valide';
                    }elseif($info35 <  '10'){$clssCheck35='NoValide';}
                }elseif($info['ID_Mat']== 'F7-36'){
                    $info36=$info['Note'];
                    if($info36== '-'){$clssCheck36='loging';
                    }elseif($info36 >= '10' ){$clssCheck36='Valide';
                    }elseif($info36 <  '10'){$clssCheck36='NoValide';}
                }elseif($info['ID_Mat']== 'F7-37'){
                    $info37=$info['Note'];
                    if($info37== '-'){$clssCheck37='loging';
                    }elseif($info37 >= '10' ){$clssCheck37='Valide';
                    }elseif($info37 <  '10'){$clssCheck37='NoValide';}
                }elseif($info['ID_Mat']== 'F7-38'){
                    $info38=$info['Note'];
                    if($info38== '-'){$clssCheck38='loging';
                    }elseif($info38 >= '10' ){$clssCheck38='Valide';
                    }elseif($info38 <  '10'){$clssCheck38='NoValide';}
                }elseif($info['ID_Mat']== 'F7-39'){
                    $info39=$info['Note'];
                    if($info39== '-'){$clssCheck39='loging';
                    }elseif($info39 >= '10' ){$clssCheck39='Valide';
                    }elseif($info39 <  '10'){$clssCheck39='NoValide';}
                }elseif($info['ID_Mat']== 'F7-40'){
                    $info40=$info['Note'];
                    if($info40== '-'){$clssCheck40='loging';
                    }elseif($info40 >= '10' ){$clssCheck40='Valide';
                    }elseif($info40 <  '10'){$clssCheck40='NoValide';}
                }elseif($info['ID_Mat']== 'F7-41'){
                    $info41=$info['Note'];
                    if($info41== '-'){$clssCheck41='loging';
                    }elseif($info41 >= '10' ){$clssCheck41='Valide';
                    }elseif($info41 <  '10'){$clssCheck41='NoValide';}
                }elseif($info['ID_Mat']== 'F7-42'){
                    $info42=$info['Note'];
                    if($info42== '-'){$clssCheck42='loging';
                    }elseif($info42 >= '10' ){$clssCheck42='Valide';
                    }elseif($info42 <  '10'){$clssCheck42='NoValide';}
                }elseif($info['ID_Mat']== 'F7-43'){
                    $info43=$info['Note'];
                    if($info43== '-'){$clssCheck43='loging';
                    }elseif($info43 >= '10' ){$clssCheck43='Valide';
                    }elseif($info43 <  '10'){$clssCheck43='NoValide';}
                }elseif($info['ID_Mat']== 'F7-44'){
                    $info44=$info['Note'];
                    if($info44== '-'){$clssCheck44='loging';
                    }elseif($info44 >= '10' ){$clssCheck44='Valide';
                    }elseif($info44 <  '10'){$clssCheck44='NoValide';}
                }elseif($info['ID_Mat']== 'F7-45'){
                    $info45=$info['Note'];
                    if($info45== '-'){$clssCheck45='loging';
                    }elseif($info45 >= '10' ){$clssCheck45='Valide';
                    }elseif($info45 <  '10'){$clssCheck45='NoValide';}
                }
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'une attestation</title>
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <link rel="stylesheet" href="CSS/Note.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>
<style>
    .loging .fa-check{
        display: none;
    }
    .loging .fa-times{
        display: none;
    }
    .loging .fa-circle-o-notch{
        display:block ;
        color: gray;
    }
    .Valide .fa-check{
        color: green;
        display: block;
    }
    .Valide .fa-times{
        display: none;
    }
    .Valide .fa-circle-o-notch{
        display: none;
    }
    .NoValide .fa-check{
        display: none;
    }
    .NoValide .fa-times{
        display: block;
        color: red;
    }
    .NoValide .fa-circle-o-notch{
        display: none;
    }
    .loging  .info{
        display: none;
    }
</style>
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

                    <li class="nav-link">
                        <a href="Paramètre.php">
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
    <section class="home home4"> 
        <div class="contant">
            <h3>Les cours que je suis : </h3>
                <table>
                    <th colspan="2" class="title">SEMESTRE 1 : </th>
                    <tr><th>Nom du cours</th><th>Note</th></tr>
                    <tr>
                        <td><a href="#">Algorithmique</a></td>
                        <td class="<?php echo $clssCheck1;?>">
                            <span class="info"><?php echo $info1;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Programmation : Langage C</a></td>
                        <td class="<?php echo $clssCheck2;?>">
                            <span class="info"><?php echo $info2;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Environnement Bureautique et Internet</a></td>
                        <td class="<?php echo $clssCheck3;?>">
                            <span class="info"><?php echo $info3;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr> 
                    <tr>
                        <td><a href="#">Introduction au Système d’Exploitation</a></td>
                        <td class="<?php echo $clssCheck4;?>">
                            <span class="info"><?php echo $info4;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Mathématiques : Analyse / Algèbre</a></td>
                        <td class="<?php echo $clssCheck5;?>">
                            <span class="info"><?php echo $info5;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Management des Entreprises</a></td>
                        <td class="<?php echo $clssCheck6;?>">
                            <span class="info"><?php echo $info6;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Introduction à l’Economie</a></td>
                        <td class="<?php echo $clssCheck7;?>">
                            <span class="info"><?php echo $info7;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Techniques de Communication :( Français – Anglais )</a></td>
                        <td class="<?php echo $clssCheck8;?>">
                            <span class="info"><?php echo $info8;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                </table>
                <table>
                    <th colspan="2" class="title">SEMESTRE 2 : </th>
                    <tr><th>Nom du cours</th><th>Note</th></tr>
                    <tr>
                        <td><a href="#">Algorithmique Avancée</a></td>
                        <td class="<?php echo $clssCheck9;?>">
                            <span class="info"><?php echo $info9;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Langage C : Aspect Avancé</a></td>
                        <td class="<?php echo $clssCheck10;?>">
                            <span class="info"><?php echo $info10;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Architecture des Ordinateurs I</a></td>
                        <td class="<?php echo $clssCheck11;?>">
                            <span class="info"><?php echo $info11;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Circuits Logiques</a></td>
                        <td class="<?php echo $clssCheck12;?>">  
                            <span class="info"><?php echo $info12;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Probabilités & Statistiques</a></td>
                        <td class="<?php echo $clssCheck13;?>">
                            <span class="info"><?php echo $info13;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Mathématiques Financières</a></td>
                        <td class="<?php echo $clssCheck14;?>">
                            <span class="info"><?php echo $info14;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Techniques de Communication :( Français – Anglais )</a></td>
                        <td class="<?php echo $clssCheck15;?>">
                            <span class="info"><?php echo $info15;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Projet de Fin d’Année</a></td>
                        <td class="<?php echo $clssCheck16;?>">
                            <span class="info"><?php echo $info16;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                </table>
                <table>
                    <th colspan="2" class="title">SEMESTRE 3 : </th>
                    <tr><th>Nom du cours</th><th>Note</th></tr>
                    <tr>
                        <td><a href="#">Bases de données I</a></td>
                        <td class="<?php echo $clssCheck17;?>">
                            <span class="info"><?php echo $info17;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>                            
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Systèmes d’Information</a></td>
                        <td class="<?php echo $clssCheck18;?>">
                        <span class="info"><?php echo $info18;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Architecture des Ordinateurs II</a></td>
                        <td class="<?php echo $clssCheck19;?>">
                        <span class="info"><?php echo $info19;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Electronique Numérique</a></td>
                        <td class="<?php echo $clssCheck20;?>">
                            <span class="info"><?php echo $info20;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Théorie des Graphes et Programmation Linéaire</a></td>
                        <td class="<?php echo $clssCheck21;?>">
                            <span class="info"><?php echo $info21;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>   
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Transmission de Données</a></td>
                        <td class="<?php echo $clssCheck22;?>">
                            <span class="info"><?php echo $info22;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i> 
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Techniques de Communication :( Français – Anglais )</a></td>
                        <td class="<?php echo $clssCheck23;?>">
                            <span class="info"><?php echo $info23;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                </table>
                <table>
                    <th colspan="2" class="title">SEMESTRE 4 : </th>
                    <tr><th>Nom du cours</th><th>Note</th></tr>
                    <tr>
                        <td><a href="#">Base de Données II</a></td>
                        <td class="<?php echo $clssCheck24;?>">
                            <span class="info"><?php echo $info24;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Développement des Applications Web</a></td>
                        <td class="<?php echo $clssCheck25;?>">
                            <span class="info"><?php echo $info25;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Systèmes d’Exploitation : UNIX</a></td>
                        <td class="<?php echo $clssCheck26;?>">
                            <span class="info"><?php echo $info26;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Téléinformatique et Réseaux Locaux</a></td>
                        <td class="<?php echo $clssCheck27;?>">
                            <span class="info"><?php echo $info27;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#"> Projet BD-SI : Base de Données et Système d’Information</a></td>
                        <td class="<?php echo $clssCheck28;?>">
                            <span class="info"><?php echo $info28;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Techniques de Communication :( Français – Anglais )</a></td>
                        <td class="<?php echo $clssCheck29;?>">
                            <span class="info"><?php echo $info29;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>  
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Projet de Fin d’Année</a></td>
                        <td class="<?php echo $clssCheck30;?>">
                            <span class="info"><?php echo $info30;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                </table>
                <table>
                    <th colspan="2" class="title">SEMESTRE 5 : </th>
                    <tr><th>Nom du cours</th><th>Note</th></tr>
                    <tr>
                        <td><a href="#"> Génie Logiciel</a></td>
                        <td class="<?php echo $clssCheck31;?>">
                        <span class="info"><?php echo $info31;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">UML</a></td>
                        <td class="<?php echo $clssCheck32;?>">
                        <span class="info"><?php echo $info32;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Développement Orienté Objet : JAVA</a></td>
                        <td class="<?php echo $clssCheck33;?>">
                        <span class="info"><?php echo $info33;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Programmation : Langage Python I</a></td>
                        <td class="<?php echo $clssCheck34;?>">
                        <span class="info"><?php echo $info34;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">TCP/IP</a></td>
                        <td class="<?php echo $clssCheck35;?>">
                        <span class="info"><?php echo $info35;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Programmation Réseaux</a></td>
                        <td class="<?php echo $clssCheck36;?>">
                        <span class="info"><?php echo $info36;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Analyse de données</a></td>
                        <td class="<?php echo $clssCheck37;?>">
                        <span class="info"><?php echo $info37;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">E-Recrutement</a></td>
                        <td class="<?php echo $clssCheck38;?>">
                            <span class="info"><?php echo $info38;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Techniques de Communication :( Français – Anglais )</a></td>
                        <td class="<?php echo $clssCheck39;?>">
                            <span class="info"><?php echo $info39;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                </table>
                <table>
                    <th colspan="2" class="title">SEMESTRE 6 : </th>
                    <tr><th>Nom du cours</th><th>Note</th></tr>
                    <tr>
                        <td><a href="#">Intelligence Artificielle</a></td>
                        <td class="<?php echo $clssCheck40;?>">
                            <span class="info"><?php echo $info40;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Administration du système Windows</a></td>
                        <td class="<?php echo $clssCheck41;?>">
                            <span class="info"><?php echo $info41;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Administration du système UNIX</a></td>
                        <td class="<?php echo $clssCheck42;?>">
                            <span class="info"><?php echo $info42;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Administration de Bases de Données</a></td>
                        <td class="<?php echo $clssCheck43;?>">
                            <span class="info"><?php echo $info43;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Programmation : Langage Python II</a></td>
                        <td class="<?php echo $clssCheck44;?>">
                            <span class="info"><?php echo $info44;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Projet de fin de cycle</a></td>
                        <td class="<?php echo $clssCheck45;?>">
                            <span class="info"><?php echo $info45;?></span>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                        </td>
                    </tr>
                </table>


        </div>
    </section>


<script src="js/js.js"></script>    
</body>
</html>



