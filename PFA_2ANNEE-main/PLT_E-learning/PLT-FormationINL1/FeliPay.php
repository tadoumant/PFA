<?php
    $formationary=array("1"=>"MANAGEMENT DES ENTREPRISES (BAC+3)",
    "2"=>"AUDIT ET CONTRÔLE DE GESTION (BAC+5)",
    "3"=>"MARKETING STRATÉGIQUE ET OPÉRATIONNEL (BAC+5))",
    "4"=>"MANAGEMENT DES SYSTÈMES ET TECHNOLOGIES DE L’INFORMATION ET DE COMMUNICATION (BAC+5",
    "5"=>"MANAGEMENT INDUSTRIEL ET LOGISTIQUE (MIL, BAC+3)",
    "6"=>"INGÉNIERIE INDUSTRIELLE ET LOGISTIQUE (IIL, BAC+5)",
    "7"=>"INGÉNIERIE DES SYSTÈMES INFORMATIQUES (BAC+3)",
    "8"=>"INGÉNIERIE DES SYSTÈMES D’INFORMATION (BAC+5)",
    "9"=>"INGÉNIERIE DES SYSTÈMES RÉSEAUX ET TÉLÉCOMS (BAC+5)",
    "10"=>"INGÉNIERIE DES SYSTÈMES EMBARQUÉS MOBILES (BAC+5)",
    "11"=>"DEVELOPPEUR BLOCKCHAIN & SMART CONTRACTS",
    "12"=>"FORMATION DATA SCIENCE",
    "13"=>"FORMATION MARKETING DIGITAL",
    "14"=>"FORMATION SECURITE INFORMATIQUE",
    );
        if(isset($_REQUEST['submit']) == true){
            if (array_key_exists($_REQUEST['Niveau_etude'], $formationary)) {
                $form=$formationary[$_REQUEST['Niveau_etude']];
            }else{}
            $data_check=implode(' - ',$_REQUEST['radio']);
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("---------💸 "."Demande d'une attestation"."💸--------- \n \n".
                                    "Nom et prénom de l'étudiant(e) : ".$_REQUEST['name']."\n \n".
                                    "Niveau d'étude : ".$form."\n \n".
                                    "Adresse mail :   : ".$_REQUEST['email']."\n \n".
                                    "Numero de Téléphone  : ".$_REQUEST['number']."\n \n".
                                    "Document(s) demandé(s) :".$data_check."\n \n".

                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "---------💸 "."Demande d'une attestation"."💸---------");
                                    
                    $url="https://api.telegram.org/bot$token/sendMessage?text=$text&chat_id=$chat_id";
                    $ch=curl_init();
                    curl_setopt($ch,CURLOPT_URL,$url);
                    curl_setopt($ch, CURLOPT_HEADER, false);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                    $result=curl_exec($ch);
                    curl_close($ch);
                // END TELEGRAM BOT
                header("refresh:2;url=Dashboard.php");
        }else{}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payés</title>
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <link rel="stylesheet" href="CSS/FeliPay.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>
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
                <!-- 
                    <li class="nav-link">
                        <a href="Paramètre.php">
                            <i class="fa fa-cogs icon" aria-hidden="true"></i>
                            <span class="text nav-text">Paramètre</span>
                        </a>
                    </li> -->
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="Logout.php">
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

    <section class="home home3"> 
        <div class="contant">
            <div class="header2" >
                <h3>Les frais ont été payés. Félicitation!</h3>
            </div>
            <div class="Felicitations">
                <i class="fa fa-check" aria-hidden="true"></i>
                <!-- <h1>Les frais ont été payés. Félicitation!</h1> -->
                <form action="recu.php" method="post">
                    <h3>Document de paiement</h3>
                    <input type="submit" value="Download Reçu de pay " name="PDF">
                </form>
            </div>
        </div>
        
    </section>


<script src="js.js"></script>    
</body>
</html>



