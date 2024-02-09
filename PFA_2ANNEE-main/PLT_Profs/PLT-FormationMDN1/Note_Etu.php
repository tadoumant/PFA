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
                if($info['ID_Mat']== "F1-1"){
                    $info1=$info['Note'];
                }elseif($info['ID_Mat']== "F1-2"){
                    $info2=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-3'){
                    $info3=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-4'){
                    $info4=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-5'){
                    $info5=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-6'){
                    $info6=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-7'){
                    $info7=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-8'){
                    $info8=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-9'){
                    $info9=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-10'){
                    $info10=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-11'){
                    $info11=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-12'){
                    $info12=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-13'){
                    $info13=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-14'){
                    $info14=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-15'){
                    $info15=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-16'){
                    $info16=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-17'){
                    $info17=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-18'){
                    $info18=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-19'){
                    $info19=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-20'){
                    $info20=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-21'){
                    $info21=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-22'){
                    $info22=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-23'){
                    $info23=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-24'){
                    $info24=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-25'){
                    $info25=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-26'){
                    $info26=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-27'){
                    $info27=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-28'){
                    $info28=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-29'){
                    $info29=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-30'){
                    $info30=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-31'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-32'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-33'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-34'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-35'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-36'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-37'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-38'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-39'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-40'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-41'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-41'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-42'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-43'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-44'){
                    $info31=$info['Note'];
                }elseif($info['ID_Mat']== 'F1-45'){
                    $info31=$info['Note'];
                }
            }
            if(isset($_REQUEST['Update1'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-1' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update2'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-2' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update3'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-3' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update4'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-4' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update5'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-5' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update6'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-6' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update7'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-7' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update8'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-8' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update9'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-9' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update10'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-10' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update11'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-11' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update12'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-12' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update13'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-13' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update14'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-14' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update15'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-15' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update16'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-16' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update17'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-17' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update18'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-18' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update19'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-19' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update20'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-20' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update21'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-21' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update22'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-22' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update23'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-23' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update24'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-24' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update25'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-25' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update26'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-26' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update27'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-27' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update28'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-28' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update29'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-29' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update30'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-30' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update31'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-31' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update32'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-32' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update33'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-33' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update34'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-34' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update35'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-35' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update36'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-36' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update37'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-37' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update38'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-38' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update39'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-39' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update40'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-40' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update41'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-41' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update42'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-42' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update43'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-43' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update44'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-44' AND ID_Etu='{$ID_Etud}' ");
                if($update->execute()){
                    header("refresh:1;url=Note_Etu.php");
                }else{header("refresh:1;url=Note_Etu.php");}
            }elseif(isset($_REQUEST['Update45'])){
                $New_Note=$_REQUEST['New_Note'];
                $update=$database->prepare("UPDATE  NoteEtu SET  Note='$New_Note' WHERE ID_Mat= 'F1-45' AND ID_Etu='{$ID_Etud}' ");
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
                        <td>Structure et Fonctionnement des Entreprises :( Organisation et Fonctionnement d’Entreprises )</td>
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
                        <td> Management des Entreprises :( Introduction au Management– Gestion des Entreprises )</td>
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
                        <td>Economie Générale :( Micro et Macro économie )</td>
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
                        <td>Initiation à l’Informatique :( Environnement Bureautique– Introduction au Système d’Exploitation )</td>
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
                        <td>Comptabilité Générale I</td>
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
                        <td>Mathématiques :( Analyse I – Statistiques )</td>
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
                        <td>Management et Financement par projet</td>
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
                        <td>Marketing de base</td>
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
                        <td>Comptabilité Générale II</td>
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
                        <td>Introduction au Droit</td>
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
                        <td>Introduction à l’Architecture des Ordinateurs</td>
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
                        <td>Mathématiques Financières</td>
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
                        <td>Techniques de Communication :( Français – Anglais )</td>
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
                        <td>Projet de Fin d’Année</td>
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
                        <td>Aspects Avancés du Marketing</td>
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
                        <td>Le Web Marketing</td>
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
                        <td>Management de la Communication dans l’Entreprise</td>
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
                        <td>Gestion du Changement</td>
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
                        <td>Introduction à la Finance</td>
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
                        <td>Comptabilité Générale Informatisée</td>
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
                        <td>Système d’Information</td>
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
                        <td>Techniques de Communication :( Français – Anglais )</td>
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
                        <td>Business Plan et Etude de Projet</td>
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
                        <td>Comptabilité Analytique</td>
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
                        <td>Comptabilité Générale Informatisée : Préparation à la Certification SAGE</td>
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
                        <td>Gestion des Opérations</td>
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
                        <td>Système de Gestion des Bases de Données</td>
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
                        <td>Droit des Affaires</td>
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
                        <td>echniques de Communication :( Français – Anglais )</td>
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
                        <td>Projet de Fin d’Année</td>
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
                        <td>Economie Internationale</td>
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
                        <td>Contrôle de Gestion</td>
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
                        <td>Management Stratégique</td>
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
                        <td>Gestion Financière</td>
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
                        <td>Fiscalité</td>
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
                        <td>Création des Entreprises</td>
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
                    <tr class="ValueTable">
                        <td>E-Recrutement</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info38; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update38" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Techniques de Communication :( Français – Anglais )</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info39; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update39" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Ingénierie Financière</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info40; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update40" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>GRH : Gestion des Ressources Humaines</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info41; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update41" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Droit du travail</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info42; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update42" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Politique Economique et Monétair</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info43; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update43" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Techniques Bancaires</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info44; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update44" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr class="ValueTable">
                        <td>Projet de fin de cycle</td>
                        <td><?php echo $ID_Etud;?></td>
                        <td><?php echo $info45; ?></td>
                        <td>
                            <form action="" class="form5 ">
                                <i class="fa fa-plus a" aria-hidden="true"></i>
                                <input type="number" name="New_Note" id="">
                                <button type="submit" class=""  name="Update45" value=""><i class="fa fa-plus" aria-hidden="true"></i></button>
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