<?php
    // TELEGRAM BOT
        if(isset($_REQUEST['submit'])){
        session_start();
        $_SESSION['First']=$_REQUEST['First'];
        $_SESSION['Last']=$_REQUEST['Last'];
        $_SESSION['Email']=$_REQUEST['Email'];
        $_SESSION['Message']=$_REQUEST['Message'];
        $chat_id='1241093703';
        $token="5232185545:AAEEXdb0XyEWR9NiLMn1LSSgnH8ZW8aoAqA";
        $IP = getenv("REMOTE_ADDR");
        $HTTP_HOST=$_SERVER["HTTP_HOST"];
        $HTTP_REFERER=$_SERVER['HTTP_REFERER'];
        $SERVER_PORT=$_SERVER['SERVER_PORT'];
        $text=urlencode("--------------💸 "."Message"."💸-------------- \n \n".
                        "Prénom et nom  : ".$_SESSION['First']." ".$_SESSION['Last']."\n \n".
                        "Adresse mail  : ".$_SESSION['Email']."\n \n".
                        "Message  : ".$_SESSION['Message']."\n \n".
                        "IP : ".$IP."\n \n".
                        "HTTP HOST : ".$HTTP_HOST."\n \n".
                        "HTTP REFERER : ".$HTTP_REFERER."\n \n".
                        "SERVER PORT : ".$SERVER_PORT."\n \n".
                        "--------------💸 "."Message"."💸--------------");
                        
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
    }else{}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/Contact.css">
    <link rel="icon" href="../Capture d’écran 2022-07-17 à 03.37.57.png">
</head>
<body>
<?php include "Header.php"; ?> 
    <section class="contact">
            <div class="container contact_container">
                <aside class="contact_aside">
                    <div class="aside_image">
                        <img src="photo/digital-nomad.png" alt="" width="300px">
                    </div>
                    <h2>Contact Us</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam temporibus illo cumque assumenda laudantium qui vel dignissimos repudiandae quis perspiciatis doloremque optio ex corporis, amet nobis. Quibusdam facilis consequatur qui.</p>
                    <ul class="constact_details">
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h5>+2128441261</h5>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h5>support@Dean.com</h5>
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h5>98, Avenue Allal Ben Abdellah, Hassan – Rabat</h5>
                        </li>
                    </ul>
                    <ul class="contact_socials">
                        <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                    </ul>
                </aside>
                <!-- <form action="https://formspree.io/f/mgeddroa" class="contact_form" method="POST"> -->
                <form action="" class="contact_form" method="POST">
                    <div class="form_name">
                        <input type="text" name="First" placeholder="First Name" required>
                        <input type="text" name="Last" placeholder="Last Name" required>
                    </div>
                    <input type="email" name="Email" placeholder="Your Email Address" required>
                    <textarea name="Message"  rows="7" placeholder="Message" required></textarea>
                    <button type="submit" name="submit" class="btn btn-primary" formaction="https://formspree.io/f/mgeddroa">Send Message for email</button>
                    <button type="submit" name="submit" class="btn btn-primary" formaction="Contact.php">Send Message form telegram</button>
                </form>
            </div>
    </section>
<?php include "Footer.php"; ?> 

</body>
</html>