<?php
    $id=rand(1,100);
    $userDB="root";
    $passwordDB="root";
    $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    if(isset($_REQUEST['upload'])){
        $fileName=$_FILES['file']['name'];
        $fileType=$_FILES['file']['type'];
        $filePosition=$_FILES['file']['tmp_name'];
        move_uploaded_file($filePosition,"../../../../Files/".$fileName);
        $position="../../../../Files/".$fileName;
        $uploadFile=$database->prepare("INSERT INTO Cours(ID_Mat,ID_Formation,ID_Cours,nameFile,TypeFile,Position) 
                VALUES('F12-8','12','$id','$fileName','$fileType','$position')");
        if($uploadFile->execute()){
            header("refresh:1;url=cours1.php");
        }else{
            header("refresh:1;url=uplodCous1-1.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expliquer le processus complet de construction des fonctions de prédiction</title>
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <link rel="stylesheet" href="CSS/uplodCous.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="logo">
                <a href="../Dashboard.php" class="logo">
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
                        <a href="../Dashboard.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Tableau de bord</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../Profil.php">
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
                        <a href="../Info_Etu.php">
                            <i class="fa fa-file-archive-o icon" aria-hidden="true"></i>
                            <span class="text nav-text"> Etudiants</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="../Logout.php">
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
    <section class="home home6"> 
        <div class="contant"> 
            <h1>Expliquer le processus complet de construction des fonctions de prédiction</h1>
            <form action="" method="post" enctype="multipart/form-data" for="inputTag">
                <input type="file" name="file" class="infile">
                <input type="submit" name="upload" value="Envoyer Cours">
            </form> 
        </div>
    </section>
<script src="JS/js.js"></script>    
</body>
</html>