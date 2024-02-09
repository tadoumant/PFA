<?php
    // BASE DE DONNEES
        $userDB="root";
        $passwordDB="root";
        $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    // BASE DE DONNEES
        session_start();
        $ID_Etud=$_SESSION['ID_Etud'];
        $info=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='{$ID_Etud}'");
        if($info->execute()){
            foreach($info as $info){
                if($info['ID_Mat']== "F5-1"){
                    $info1=$info['Note'];
                }elseif($info['ID_Mat']== "F5-2"){
                    $info2=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-3'){
                    $info3=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-4'){
                    $info4=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-5'){
                    $info5=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-6'){
                    $info6=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-7'){
                    $info7=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-8'){
                    $info8=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-9'){
                    $info9=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-10'){
                    $info10=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-11'){
                    $info11=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-12'){
                    $info12=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-13'){
                    $info13=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-14'){
                    $info14=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-15'){
                    $info15=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-16'){
                    $info16=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-17'){
                    $info17=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-18'){
                    $info18=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-19'){
                    $info19=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-20'){
                    $info20=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-21'){
                    $info21=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-22'){
                    $info22=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-23'){
                    $info23=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-24'){
                    $info24=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-25'){
                    $info25=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-26'){
                    $info26=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-27'){
                    $info27=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-28'){
                    $info28=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-29'){
                    $info29=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-30'){
                    $info30=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-31'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-32'){
                    $info32=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-33'){
                    $info33=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-34'){
                    $info34=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-35'){
                    $info35=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-36'){
                    $info36=$info['Note'];
                }elseif($info['ID_Mat']== 'F5-37'){
                    $info37=$info['Note'];
                }
            }
            if(isset($_REQUEST['Update1'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-1' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update2'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-2' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update3'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-3' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update4'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-4' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update5'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-5' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update6'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-6' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update7'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-7' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update8'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-8' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update9'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-9' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update10'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-10' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update11'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-11' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update12'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-12' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update13'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-13' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update14'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-14' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update15'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-15' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update16'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-16' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update17'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-17' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update18'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-18' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update19'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-19' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update20'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-20' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update21'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-21' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update22'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-22' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update23'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-23' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update24'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-24' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update25'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-25' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update26'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-26' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update27'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-27' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update28'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-28' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update29'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-29' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update30'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-30' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update31'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-31' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update32'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-32' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update33'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-33' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update34'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-34' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update35'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-35' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update36'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-36' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update37'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F5-37' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }



        }else{header("refresh:1;url=1.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <link rel="stylesheet" href="CSS/Note.css">
    <link rel="stylesheet" href="CSS/infoEtu.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <title>Note Etudiants</title>
    <style>
        .form5{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 14rem;
            padding: 0;
        }
        .form5 i{
            font-size: 1.5rem;
            cursor: pointer;
        }
        .form5 input{
            background-color: #fff;
            height: 30px;
            width: 112px;
            color: #424890;
            display: none;
        }
        .form5 button{
            background-color: transparent;
            display: none;
        }
        .form5 button i{
            font-size: 1rem;
            cursor: pointer;
            color: white;
            background-color: #424890;
            border-radius: 50%;
            padding: 8px;
        }
        .form5.active i.a{
            display: none;
        }
        .form5.active button{
            display: block;
            position: relative;
            right: 2rem;
        }
        .form5.active input{
            display: block;
        }

    </style>
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
    <section class="home home4"> 
        <div class="contant">
            <h3>Informatin d'etudiants : </h3>
                <table class="table">
                    <tr  class="titleTable" style="text-align: center;">
                        <th>Matier</th>
                        <th>ID_Etu</th>
                        <th>Note</th>
                        <th>NOUVELLE NOTE</th>
                    </tr>
                    <tr class="ValueTable">
                        <td>Mathématiques Générales I :( Analyse I – Algèbre )</td>
                        <td><?php echo $ID_Etud;?></td>
                         <td><?php echo $info1; ?></td>
                        <td>
                            <form action="Note_Etu.php" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" maxlength="2" placeholder="max 20 " required>
                                <input type="text" name="ID_Mat"  value="<?php echo $result1['ID_Mat'];?>" style="display: none;">
                                <button type="submit" class=""  name="Update1" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Management des Entreprises :( Introduction au Management – Gestion des Entreprises )</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info2; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="" required> 
                                <button type="submit" class=""  name="Update2" value=" "><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Initiation à l’Informatique</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info3; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="" required>
                                <button type="submit" class=""  name="Update3" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Algorithmique</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info4; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="" required>
                                <button type="submit" class=""  name="Update4" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Programmation : Langage C</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info5; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update5" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Electricité :( Électrocinétique – Électrostatique )</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info6; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update6" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Techniques de Communication :( Français – Anglais )</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info7; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update7" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Architecture des ordinateurs I</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info8; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update8" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Langage C : Aspect Avancé</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info9; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update9" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Probabilités et statistiques</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info10; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update10" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Circuits logiques</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info11; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update11" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Thermodynamique & Technologie pratique</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info12; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update12" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Techniques de Communication :( Français – Anglais )</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info13; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update13" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Projet de Fin d’Année</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info14; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update14" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Informatique Industrielle : Modélisation des processus Industriels /Bases de Données I<</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info15; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update15" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Théorie des graphes et Programmation Linéaire</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info16; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update16" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Mécanique et application</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info17; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update17" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Électromagnétisme</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info18; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update18" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Dessin industriel et initiation technique</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info19; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update19" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Techniques de Communication :( Français – Anglais )</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info20; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update20" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>RDM (Base de la conception)</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info21; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update21" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Développement des applications Web</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info22; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update22" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>DAO et outils Matlab</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info23; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update23" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Comptabilité générale</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info24; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update24" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Electronique et Projet</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info25; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update25" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Techniques de Communication :( Français – Anglais )</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info26; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update26" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Projet de Fin d’Année</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info27; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update27" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Achat, approvisionnement et chaîne logistique</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info28; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update28" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Procédés de fabrication et risques industriels</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info29; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update29" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Logistique, Transport, Gestion des Entrepôts et Distribution</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info30; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update30" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Analyse des données</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info31; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update31" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Systèmes d’information appliqués à la gestion des flux</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info32; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update32" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Techniques de Communication :( Français – Anglais )</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info33; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update33" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Gestion de la Production et de la maintenance</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info34; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update34" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Management de la Qualité</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info35; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update35" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Gestion de Projet & Projets de création d’entreprise</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info36; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update36" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Projet de fin de cycle</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info37; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update37" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
        </div>
    </section>
    <script>
        const AddNote=document.querySelectorAll('.form5'),
        NoteActive=document.querySelectorAll('.form5 i') ;

        AddNote.forEach(item=>{
            item.onclick=function(){
                item.classList.add('active');
            }
        })
    </script>
    <script src="JS/js.js"></script> 
    
</body>
</html>