<?php
    $userDB="root";
    $passwordDB="root";
    $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    session_start();
    $unique_id=$_SESSION['ID_Etu'];
    $logout=$database->prepare("UPDATE Etudiants SET statusEtu='Offline now' WHERE ID_Etu='{$unique_id}'");
    if($logout->execute()){
        session_unset();
        session_destroy();
        header("refresh:1;url=../../E-learning.php");


    }else{
        echo "conct";
    }


?>