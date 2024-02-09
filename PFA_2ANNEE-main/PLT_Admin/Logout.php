<?php
    $userDB="root";
    $passwordDB="root";
    $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    session_start();
    $unique_id=$_SESSION['ID_Admin'];
    $logout=$database->prepare("UPDATE Admin1 SET statusAdmin='Offline now' WHERE ID_Admin='{$unique_id}'");
    if($logout->execute()){
        session_unset();
        session_destroy();
        header("refresh:1;url=./../Admin.php");
    }else{echo "conct";}
?>