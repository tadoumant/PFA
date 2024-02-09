<?php
    $userDB="root";
    $passwordDB="root";
    $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    session_start();
    $unique_id=$_SESSION['ID_Prof'];
    $logout=$database->prepare("UPDATE Profs SET statusProf='Offline now' WHERE ID_Prof='{$unique_id}'");
    if($logout->execute()){
        session_unset();
        session_destroy();
        header("refresh:1;url=../../PlatfProf.php");
    }else{echo "404";}
?>