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
        require_once "ConDB.php";
        session_start();
        $unique_id=$_SESSION['ID_Etu'];
        $check=$database->prepare("SELECT * FROM Etudiants WHERE ID_Etu='$unique_id' " );
        $check->execute();
            if($check->rowCount() === 1){
                foreach($check as $ch){
                    $ID_Etu=$ch['ID_Etu'];
                    $Email_Etu=$ch['Email_Etu'];
                    $Name=$ch['Prenom_Etu'].' '.$ch['Nom_Etu'];
                    $NumPhone_Etu=$ch['NumPhone_Etu'];
                    $Formation_Etu=$ch['Formation_Etu'];
                }
            }
        if(isset($_REQUEST['submit']) == true){
            if (array_key_exists($_REQUEST['Niveau_etude'], $formationary)) {
                $form=$formationary[$_REQUEST['Niveau_etude']];
            }else{}
            $data_check=$_REQUEST['radio'];
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
                                "---------💸 "."Demande d'une attestation"."💸---------")
                ;                
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
            $DammendAtte=$database->prepare("INSERT INTO DammendAtte(ID_Etu,DocumentDemandé,ActionDmn) VALUES('$unique_id','$data_check','Deisble')");
            if($DammendAtte->execute()){
                header("refresh:1;url=Dashboard.php");
            }else{
                header("refresh:1;url=1.php");
            }
        }else{}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'une attestation</title>
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <link rel="stylesheet" href="CSS/attestation.css">
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
         <div class="logo1">
            <a href="Dashboard.php" class="logo1">
                <i class="fab fa-accusoft"></i>
                <span>DEAN</span>
            </a>
        </div>
        <div class="parag">   
            <h3>Demande des documents administratifs</h3>         
            <p>fin de faciliter la procédure de demande des documents administratifs et veiller au respect des mesures de distanciation, l'école DEAN a mis en place ce formulaire à remplir par les étudiants. Ainsi, une fois que vos documents seront disponibles au niveau de l'administration vous recevrez une notification par Mail.
                Le traitement des demandes se fera suivant l'ordre d'envoi du formulaire. 
                Nous vous remercions pour la compréhension et vous demandons de bien vouloir respecter la procédure. </p>
        </div>
       <form action="attestation.php" method="POST">
            <div class="Info-mail">
                <div class="Info-1">
                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                    <h3><?php echo $Email_Etu; ?> </h3>
                    <h3>(non partagé)</h3>
                </div>
                <div class="Obligatoire">
                    <label >* Obligatoire</label>
                </div>
            </div>
            <div class="input ">
                <label>Nom et prénom de l'étudiant(e) : <span>*</span></label>
                <input type="text" name="name" placeholder="Votre reponse" value="<?php echo $Name;?>" required>
            </div>
            <div class="input Niveau_etude">
                <label>Niveau d'étude : <span>*</span></label>
                    <select name="Niveau_etude"  tabindex="-1"  aria-hidden="true" required>
                        <option value="1">MANAGEMENT DES ENTREPRISES (BAC+3)</option>
                        <option value="2">AUDIT ET CONTRÔLE DE GESTION (BAC+5)</option>
                        <option value="3">MARKETING STRATÉGIQUE ET OPÉRATIONNEL (BAC+5)</option>
                        <option value="4">MANAGEMENT DES SYS ET TECH DE INFO ET DE COM</option>
                        <option value="5">MANAGEMENT INDUSTRIEL ET LOGISTIQUE (MIL, BAC+3)</option>
                        <option value="6">INGÉNIERIE INDUSTRIELLE ET LOGISTIQUE (IIL, BAC+5)</option>
                        <option value="7">INGÉNIERIE DES SYS INFORMATIQUES (BAC+3)</option>
                        <option value="8">INGÉNIERIE DES SYS D’INFORMATION (BAC+5)</option>
                        <option value="9">INGÉNIERIE DES SYS RÉSEAUX ET TÉLÉCOMS (BAC+5)</option>
                        <option value="10">INGÉNIERIE DES SYS EMBARQUÉS MOBILES (BAC+5)</option>
                        <option value="11">DEVELOPPEUR BLOCKCHAIN & SMART CONTRACTS</option>
                        <option value="12" >FORMATION DATA SCIENCE </option>
                        <option value="13">FORMATION MARKETING DIGITAL </option>
                        <option value="14">FORMATION SECURITE INFORMATIQUE </option>
                    </select>
                <div class="question">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    <label>Cette question est obligatoire.</label>
                </div>
            </div>
            <div class="input ">
                <label>Adresse mail : <span>*</span></label>
                <input type="email" name="email" placeholder="Votre reponse"  value="<?php echo $Email_Etu;?>" required>
            </div>
            <div  class="input ">
                <label>Numéro de téléphone : <span>*</span></label>
                <input type="number" name="number" placeholder="Votre reponse"  value="<?php echo $NumPhone_Etu;?>" required>
            </div>
            <div class="radio">
                <label>Document(s) demandé(s) : <span>*</span></label>
                <div class="radio1">
                    <input type="radio" name="radio" value="Attestation_d_inscription" >
                    <label>Attestation d'inscription</label>
                </div>
                <div class="radio1">
                    <input type="radio" name="radio" value="Attestation_de_scolarité" >
                    <label>Attestation de scolarité</label>
                </div>
                <div class="radio1">
                    <input type="radio" name="radio" value="Relevé_de_notes" >
                    <label>Relevé de notes </label>
                </div>
                <div class="radio1">
                    <input type="radio" name="radio" value="Attestation_de_réussite" >
                    <label>Attestation de réussite</label>
                </div>
                <div class="radio1">
                    <input type="radio" name="radio" value="BAC+3" >
                    <label>BAC+3</label>
                </div>
                <div class="radio1">
                    <input type="radio" name="radio" value="BAC+5" >
                    <label>BAC+5</label>
                </div>
                <div class="radio1">
                    <input type="radio" name="radio" value="Autre" >
                    <label>Autre </label>
                </div>

            </div>
            <div  class=" send">
                <input type="submit" name="submit" value="Envoyer" class="submit">
                <input type="reset" value="Effacer le formulaire" class="reset">
            </div>
       </form>
    </div>
    </section>


<script src="JS/js.js"></script>    
</body>
</html>



