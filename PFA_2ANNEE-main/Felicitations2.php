<?php

    header("refresh:6;url=E-learning.php");
    session_start();
    $passeord=$_SESSION['passeord_ins'];
    $email=$_SESSION['email_ins'];
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Félicitations</title>
    <link rel="stylesheet" href="css/Felicitations.css">
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../Capture d’écran 2022-07-17 à 03.37.57.png">

</head>
<body>
<?php include "Header.php"; ?>  
    <section id="header2" >
        <h3>Félicitations</h3>
    </section>
    <section id="Felicitations">
        <i class="fa fa-check" aria-hidden="true"></i>
        <h1>Vous êtes devenu notre élève. Félicitations!</h1>
        <div class="info">
            <h2>Email : <?php echo $email;?></h2>
            <h2>Mot de passe : <?php echo $passeord;?></h2>
        </div>
        <form action="recu.php" method="post">
            <h3>Document de paiement</h3>
            <input type="submit" value="Download Reçu de pay " name="PDF" style="padding:10px 20px;border-radius: 20px;border: 1px solid transparent;box-shadow: 1px 1px 9px 1px black;background-image: url('background.jpg');color: black;font-weight: bolder;cursor: pointer; margin-top:10px;">
        </form>


    </section>
<?php include "Footer.php"; ?> 
</body>
</html>
       
