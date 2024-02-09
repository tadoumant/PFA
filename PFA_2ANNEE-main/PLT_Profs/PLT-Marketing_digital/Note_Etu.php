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
                if($info['ID_Mat']== "F13-1"){
                    $info1=$info['Note'];
                }elseif($info['ID_Mat']== "F13-2"){
                    $info2=$info['Note'];
                }elseif($info['ID_Mat']== 'F13-3'){
                    $info3=$info['Note'];
                }elseif($info['ID_Mat']== 'F13-4'){
                    $info4=$info['Note'];
                }elseif($info['ID_Mat']== 'F13-5'){
                    $info5=$info['Note'];
                }elseif($info['ID_Mat']== 'F13-6'){
                    $info6=$info['Note'];
                }elseif($info['ID_Mat']== 'F13-7'){
                    $info7=$info['Note'];
                }elseif($info['ID_Mat']== 'F13-8'){
                    $info8=$info['Note'];
                }elseif($info['ID_Mat']== 'F13-9'){
                    $info9=$info['Note'];
                }
            }
            if(isset($_REQUEST['Update1'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F13-1' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update2'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F13-2' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update3'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F13-3' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update4'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F13-4' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update5'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F13-5' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update6'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F13-6' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update7'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F13-7' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update8'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F13-8' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update9'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F13-9' AND ID_Etu='{$ID_Etud}' ");
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
                        <td>Médias Sociaux	</td>
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
                        <td>Facebook Ads & Linkedin Ads	</td>
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
                        <td>Conversion De Son Audience	</td>
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
                        <td>Web Design Et Web Dev Pour Web Marketeurs	</td>
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
                        <td>Référencement Payant	</td>
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
                        <td>Affiliation	</td>
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
                        <td>E-Mailing	</td>
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
                        <td>Mesure De La Performance De Son Webmarketing	</td>
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
                        <td>E-Commerce	</td>
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
                </table>
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