<?php
    session_start();
    $ID1="A".rand(1000,10000);
    $_SESSION['ID_ins']=rand(1,100);
    $_SESSION['unique_id']=$ID1;
    $_SESSION['Prenom_ins']= $_REQUEST['Prenom'];
    $_SESSION['Nom_ins']=$_REQUEST['Nom'];
    $_SESSION['passeord_ins']=$_REQUEST['Nom'].'.'.$_REQUEST['Prenom'].rand(1,100);
    $_SESSION['Numero_ins']=$_REQUEST['Numero'];
    $_SESSION['email_ins']=$_REQUEST['email'];
    $_SESSION['pays_ins']=$_REQUEST['pays'];
    $_SESSION['ville_ins']=$_REQUEST['ville'];
    $_SESSION['serie_ins']=$_REQUEST['serie'];
    $_SESSION['diplome_ins']=$_REQUEST['diplome'];
    $_SESSION['filiere_ins']=$_REQUEST['filiere'];
    $_SESSION['formation_ins']=$_REQUEST['formation'];
    $_SESSION['date_ins']=date("l d M Y h:i:sa");

    $unique_id=$ID1;
    $Prenom=$_REQUEST['Prenom'];
    $Nom=$_REQUEST['Nom'];
    $pays=$_REQUEST['pays'];
    $ville=$_REQUEST['ville'];
    $Numero=$_REQUEST['Numero'];
    $email=$_REQUEST['email'];
    $serie=$_REQUEST['serie'];
    $diplome=$_REQUEST['diplome'];
    $formation1=$_REQUEST['formation'];
    $Password=$_REQUEST['Nom'].'.'.$_REQUEST['Prenom'].rand(1,100);
    $date=date("l d M Y h:i:sa");
    if(isset($_REQUEST['su'])){
        $userDB="root";
        $passwordDB="";
        $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
        $add_user=$database->prepare("INSERT INTO Etudiants(ID_Etu,Prenom_Etu,Nom_Etu,Pays_Etu,Ville_Etu,NumPhone_Etu,Email_Etu,SerieBAC_Etu,Niveau_Etu,Formation_Etu,Password_Etu,PremierAccesAuSite,statusEtu) 
        VALUES('$unique_id','$Prenom','$Nom','$pays','$ville','$Numero','$email','$serie','$diplome','$formation1','$Password','$date','Active now')");
        if($add_user->execute()){
            $check=$database->prepare("SELECT * FROM Etudiants WHERE ID_Etu='{$unique_id}' " );
            $check->execute();
            $check=$check->fetch(PDO::FETCH_ASSOC);
            if($check['Formation_Etu'] == '1'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-1','1','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-2','1','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-3','1','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-4','1','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-5','1','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-6','1','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-7','1','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-8','1','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-9','1','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-10','1','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-11','1','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-12','1','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-13','1','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-14','1','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-15','1','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-16','1','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-17','1','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-18','1','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-19','1','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-20','1','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-21','1','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-22','1','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-23','1','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-24','1','{$unique_id}','-')" );
                $AddNote25=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-25','1','{$unique_id}','-')" );
                $AddNote26=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-26','1','{$unique_id}','-')" );
                $AddNote27=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-27','1','{$unique_id}','-')" );
                $AddNote28=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-28','1','{$unique_id}','-')" );
                $AddNote29=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-29','1','{$unique_id}','-')" );
                $AddNote30=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-30','1','{$unique_id}','-')" );
                $AddNote31=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-31','1','{$unique_id}','-')" );
                $AddNote32=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-32','1','{$unique_id}','-')" );
                $AddNote33=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-33','1','{$unique_id}','-')" );
                $AddNote34=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-34','1','{$unique_id}','-')" );
                $AddNote35=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-35','1','{$unique_id}','-')" );
                $AddNote36=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-36','1','{$unique_id}','-')" );
                $AddNote37=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-37','1','{$unique_id}','-')" );
                $AddNote38=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F1-38','1','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();$AddNote20->execute();$AddNote21->execute();$AddNote22->execute();$AddNote23->execute();$AddNote24->execute();
                $AddNote25->execute();$AddNote26->execute();$AddNote27->execute();$AddNote28->execute();$AddNote29->execute();$AddNote30->execute();$AddNote31->execute();$AddNote32->execute();
                $AddNote33->execute();$AddNote34->execute();$AddNote35->execute();$AddNote36->execute();$AddNote37->execute();$AddNote38->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '2'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-1','1','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-2','1','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-3','1','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-4','1','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-5','1','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-6','1','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-7','1','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-8','1','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-9','1','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-10','1','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-11','1','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-12','1','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-13','1','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-14','1','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-15','1','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-16','1','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-17','1','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-18','1','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-19','1','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-20','1','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-21','1','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-22','1','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-23','1','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-24','1','{$unique_id}','-')" );
                $AddNote25=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-25','1','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();$AddNote20->execute();$AddNote21->execute();$AddNote22->execute();$AddNote23->execute();$AddNote24->execute();
                $AddNote25->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '3'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-1','1','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-2','1','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-3','1','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-4','1','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-5','1','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-6','1','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-7','1','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-8','1','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-9','1','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-10','1','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-11','1','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-12','1','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-13','1','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-14','1','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-15','1','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-16','1','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-17','1','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-18','1','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-19','1','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-20','1','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-21','1','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-22','1','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-23','1','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-24','1','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();$AddNote20->execute();$AddNote21->execute();$AddNote22->execute();$AddNote23->execute();$AddNote24->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '4'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-1','1','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-2','1','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-3','1','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-4','1','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-5','1','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-6','1','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-7','1','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-8','1','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-9','1','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-10','1','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-11','1','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-12','1','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-13','1','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-14','1','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-15','1','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-16','1','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-17','1','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-18','1','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-19','1','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-20','1','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-21','1','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-22','1','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-23','1','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-24','1','{$unique_id}','-')" );
                $AddNote25=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-25','1','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();$AddNote20->execute();$AddNote21->execute();$AddNote22->execute();$AddNote23->execute();$AddNote24->execute();
                $AddNote25->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '5'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-1','1','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-2','1','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-3','1','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-4','1','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-5','1','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-6','1','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-7','1','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-8','1','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-9','1','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-10','1','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-11','1','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-12','1','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-13','1','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-14','1','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-15','1','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-16','1','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-17','1','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-18','1','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-19','1','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-20','1','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-21','1','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-22','1','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-23','1','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-24','1','{$unique_id}','-')" );
                $AddNote25=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-25','1','{$unique_id}','-')" );
                $AddNote26=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-26','1','{$unique_id}','-')" );
                $AddNote27=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-27','1','{$unique_id}','-')" );
                $AddNote28=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-28','1','{$unique_id}','-')" );
                $AddNote29=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-29','1','{$unique_id}','-')" );
                $AddNote30=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-30','1','{$unique_id}','-')" );
                $AddNote31=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-31','','{$unique_id}','-')" );
                $AddNote32=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-32','5','{$unique_id}','-')" );
                $AddNote33=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-33','5','{$unique_id}','-')" );
                $AddNote34=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-34','5','{$unique_id}','-')" );
                $AddNote35=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-35','5','{$unique_id}','-')" );
                $AddNote36=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-36','5','{$unique_id}','-')" );
                $AddNote37=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-37','5','{$unique_id}','-')" );
                $AddNote38=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-38','5','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();$AddNote20->execute();$AddNote21->execute();$AddNote22->execute();$AddNote23->execute();$AddNote24->execute();
                $AddNote25->execute();$AddNote26->execute();$AddNote27->execute();$AddNote28->execute();$AddNote29->execute();$AddNote30->execute();$AddNote31->execute();$AddNote32->execute();
                $AddNote33->execute();$AddNote34->execute();$AddNote35->execute();$AddNote36->execute();$AddNote37->execute();$AddNote38->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '6'){
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '7'){
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '8'){
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '9'){
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '10'){
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '11'){
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '12'){
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '13'){
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '14'){
                header("refresh:1;url=InscriptionPayment.php");
            }            
        }else{
            header("refresh:1;url=Inscription.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÉ-INSCRIPTION</title>
    <link rel="stylesheet" href="css/Inscription.css">
    <link rel="icon" href="../Capture d’écran 2022-07-17 à 03.37.57.png">
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include "Header.php"; ?>  
    <section id="header2" >
        <h3>PRÉ-INSCRIPTION</h3>
    </section>
    <section id="login">
        <form action="Inscription.php" method="post">
            <a href="Home.html" class="logo"><i class="fab fa-accusoft"></i><span>DEAN</span></a>
            <h4> PRÉ-INSCRIVEZ-VOUS !</h4>
            <hr>
            <div class="container">
                <div class="Prénom in">
                    <label >Prénom <span>*</span></label>
                    <input type="text" name="Prenom" >
                </div>
                <div class="Nom in">
                    <label >Nom <span>*</span></label>
                    <input type="text" name="Nom" >
                </div>
                <div class="Pays se">
                    <label >Pays de résidence <span>*</span></label>
                    <select  name="pays" id="pays"  tabindex="-1" aria-hidden="true">                    
                        <option value="" selected="" class="selected">-None-</option>
                        <option value="Afrique du Sud">Afrique du Sud</option>
                        <option value="Algérie">Algérie</option>
                        <option value="Angola">Angola</option>
                        <option value="Bénin">Bénin</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cameroun">Cameroun</option>
                        <option value="Cap Vert">Cap Vert</option>
                        <option value="Comores">Comores</option>
                        <option value="Côte d’Ivoire">Côte d’Ivoire</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Égypte">Égypte</option>
                        <option value="Érythrée">Érythrée</option>
                        <option value="Éthiopie">Éthiopie</option>
                        <option value="Gabon-libreville">Gabon-libreville</option>
                        <option value="Gabon-port gentil">Gabon-port gentil</option>
                        <option value="Gambie">Gambie</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Guinée">Guinée</option>
                        <option value="Guinée équatoriale">Guinée équatoriale</option>
                        <option value="Guinée-Bissau">Guinée-Bissau</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Libéria">Libéria</option>
                        <option value="Libye">Libye</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Mali">Mali</option>
                        <option value="Maroc">Maroc</option>
                        <option value="Mauritanie">Mauritanie</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Ouganda">Ouganda</option>
                        <option value="République Centrafricaine">République Centrafricaine</option>
                        <option value="République démocratique du Congo">République démocratique du Congo</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe</option>
                        <option value="Sénégal">Sénégal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Somalie">Somalie</option>
                        <option value="Soudan">Soudan</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Tanzanie">Tanzanie</option>
                        <option value="Tchad">Tchad</option>
                        <option value="Togo">Togo</option>
                        <option value="Tunisie">Tunisie</option>
                    </select>
                </div>
                <div class="Ville se">
                    <label >Ville</label>
                    <select  name="ville" tabindex="-1" aria-hidden="true">
                        <option value="" selected="" class="selected">-None-</option>
                        <option value="Agadir">Agadir</option>
                        <option value="Aït Melloul">Aït Melloul</option>
                        <option value="Al Hoceima">Al Hoceima</option>
                        <option value="Beni Mellal">Beni Mellal</option>
                        <option value="Berkane">Berkane</option>
                        <option value="Berrechid">Berrechid</option>
                        <option value="Bouskoura">Bouskoura</option>
                        <option value="Casablanca">Casablanca</option>
                        <option value="Dar Bouazza">Dar Bouazza</option>
                        <option value="Dcheira El Jihadia">Dcheira El Jihadia</option>
                        <option value="El Jadida<">El Jadida</option>
                        <option value="Errachidia">Errachidia</option>
                        <option value="Essaouira">Essaouira</option>
                        <option value="Fez">Fez</option>
                        <option value="Fquih Ben Salah">Fquih Ben Salah</option>
                        <option value="Guelmim">Guelmim</option>
                        <option value="Guercif">Guercif</option>
                        <option value="Inezgane">Inezgane</option>
                        <option value="Kelaa Des Sraghna">Kelaa Des Sraghna</option>
                        <option value="Kenitra">Kenitra</option>
                        <option value="Khemisset">Khemisset</option>
                        <option value="Khenifra">Khenifra</option>
                        <option value="Khouribga">Khouribga</option>
                        <option value="Ksar El Kebir">Ksar El Kebir</option>
                        <option value="Lahraouyine">Lahraouyine</option>
                        <option value="Larache">Larache</option>
                        <option value="Marrakesh">Marrakesh</option>
                        <option value="Meknes">Meknes</option>
                        <option value="Mohammedia">Mohammedia</option>
                        <option value="Nador">Nador</option>
                        <option value="Ouarzazate">Ouarzazate</option>
                        <option value="Ouazzane">Ouazzane</option>
                        <option value="Oued Zem">Oued Zem</option>
                        <option value="Oujda">Oujda</option>
                        <option value="Oulad Teima">Oulad Teima</option>
                        <option value="Rabat">Rabat</option>
                        <option value="Safi">Safi</option>
                        <option value="Salé">Salé</option>
                        <option value="Sefrou">Sefrou</option>
                        <option value="Settat">Settat</option>
                        <option value="Sidi Kacem">Sidi Kacem</option>
                        <option value="Sidi Slimane">Sidi Slimane</option>
                        <option value="Skhirat">Skhirat</option>
                        <option value="Souk El Arbaa">Souk El Arbaa</option>
                        <option value="Tan-Tan">Tan-Tan</option>
                        <option value="Tangier">Tangier</option>
                        <option value="Taourirt">Taourirt</option>
                        <option value="Taroudant">Taroudant</option>
                        <option value="Taza">Taza</option>
                        <option value="Temara">Temara</option>
                        <option value="Tetouan">Tetouan</option>
                        <option value="Tifelt">Tifelt</option>
                        <option value="Tiznit">Tiznit</option>
                        <option value="Youssoufia">Youssoufia</option>									
                    </select>
                </div>
                <div class="Numero">
                    <label>Numero de Téléphone <span>*</span></label>
                    <div class="Numero-inp">
                        <input type="number" name="Numero" class="inp1">
                    </div>
                </div>
                <div class="Adresse in">
                    <label >Adresse mail</label>
                    <input type="email" name="email" >
                </div>
                <div class="Serie se">
                    <label >Serie du bac <span>*</span></label>
                    <select  name="serie"  tabindex="-1" aria-hidden="true">
                        <option value="None" selected="">-None-</option>
                        <option value="Lettres">Lettres</option>
                        <option value="Sciences de la Vie et de la Terre">Sciences de la Vie et de la Terre</option>
                        <option value="Sciences Physiques et Chimiques">Sciences Physiques et Chimiques</option>
                        <option value="Sciences Maths A">Sciences Maths A</option>
                        <option value="Sciences Maths B">Sciences Maths B</option>
                        <option value="Sciences Economiques">Sciences Economiques</option>
                        <option value="Techniques de Gestion et de Comptabilité">Techniques de Gestion et de Comptabilité</option>
                        <option value="Sciences et Technologies Mécaniques">Sciences et Technologies Mécaniques</option>
                        <option value="Sciences Humaines">Sciences Humaines</option>
                        <option value="Autre">Autre</option>									
                    </select>
                </div>
                <div class="Niveau se">
                    <label >Niveau d'études actuel</label>
                    <select class="select2-hidden-accessible" name="diplome" id="diplome" tabindex="-1" aria-hidden="true">
                        <option value="None" selected="" class="selected">-None-</option>
                        <option value="BAC" title="title of option">BAC</option>
                        <option value="Cycle d'Ingénieur d'Etat" title="title of option">Cycle d'Ingénieur d'Etat</option>
                        <option value="Licence" title="title of option">Licence</option>
                        <option value="1ère Année Bac" title="title of option">1ère Année Bac</option>
                        <option value="2ème Année Bac" title="title of option">2ème Année Bac</option>
                        <option value="MASTER" title="title of option">MASTER</option>									
                    </select>
                </div>
                <div class="Filière se">
                    <label>Filière</label>
                    <select class="select2-hidden-accessible" name="filiere" id="filiere" tabindex="-1" aria-hidden="true">
                            <option value="None" selected="">-None-</option>
                    </select>
                </div>
                <div class="Formation se">
                    <label >Formation demandée <span>*</span></label>
                    <select name="formation"  tabindex="-1"  aria-hidden="true">
                        <option value="" selected="">-None-</option>
                        <option value="" class="op-disabled" disabled="">MANAGEMENT ET FINANCE </option>
                        <option value="1">MANAGEMENT DES ENTREPRISES (BAC+3)</option>
                        <option value="2">AUDIT ET CONTRÔLE DE GESTION (BAC+5)</option>
                        <option value="3">MARKETING STRATÉGIQUE ET OPÉRATIONNEL (BAC+5)</option>
                        <option value="4">MANAGEMENT DES SYSTÈMES ET TECHNOLOGIES DE L’INFORMATION ET DE COMMUNICATION (BAC+5)</option>
                        <option value="5">MANAGEMENT INDUSTRIEL ET LOGISTIQUE (MIL, BAC+3)</option>
                        <option value="6">INGÉNIERIE INDUSTRIELLE ET LOGISTIQUE (IIL, BAC+5)</option>
                        <option value="7">INGÉNIERIE DES SYSTÈMES INFORMATIQUES (BAC+3)</option>
                        <option value="8">INGÉNIERIE DES SYSTÈMES D’INFORMATION (BAC+5)</option>
                        <option value="9">INGÉNIERIE DES SYSTÈMES RÉSEAUX ET TÉLÉCOMS (BAC+5)</option>
                        <option value="10">INGÉNIERIE DES SYSTÈMES EMBARQUÉS MOBILES (BAC+5)</option>
                        <option value="11">DEVELOPPEUR BLOCKCHAIN & SMART CONTRACTS</option>
                        <option value="12" >FORMATION DATA SCIENCE </option>
                        <option value="13">FORMATION MARKETING DIGITAL </option>
                        <option value="14">FORMATION SECURITE INFORMATIQUE </option>

                    </select>
                </div>
            </div>
            <div class="input-sub">
                <input type="submit" name="su" value="suivant" class="submit">
                <input type="reset" class="rest" value="Annuller" >
            </div>
        </form>
    </section>
<?php include "Footer.php"; ?> 
</body>
</html>