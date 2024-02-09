<?php
    session_start();
    $ID1="A".rand(1000,10000);
    $_SESSION['ID_ins']=rand(1,100);
    $_SESSION['unique_id']=$ID1;
    $_SESSION['Prenom_ins']= $_REQUEST['Prenom'];
    $_SESSION['Nom_ins']=$_REQUEST['Nom'];
    $_SESSION['passeord_ins']=$_REQUEST['Nom'].'.'.$_REQUEST['Prenom'].rand(1,100);
    $_SESSION['Numero_ins']=$_REQUEST['Numero'];
    $_SESSION['pays_ins']=$_REQUEST['pays'];
    $_SESSION['ville_ins']=$_REQUEST['ville'];
    $_SESSION['serie_ins']=$_REQUEST['serie'];
    $_SESSION['diplome_ins']=$_REQUEST['diplome'];
    $_SESSION['filiere_ins']=$_REQUEST['filiere'];
    $_SESSION['formation_ins']=$_REQUEST['formation'];
    $_SESSION['date_ins']=date("l d M Y h:i:sa");
    $NULL=NULL;
    $ID_admin=$_REQUEST['ID_admin'];
    $unique_id=$ID1;
    $Prenom=$_REQUEST['Prenom'];
    $Nom=$_REQUEST['Nom'];
    $pays=$_REQUEST['pays'];
    $ville=$_REQUEST['ville'];
    $Numero=$_REQUEST['Numero'];
    // $email=$_REQUEST['email'];
    $email=$unique_id.'@gmail.com';
    $_SESSION['email_ins']=$email;
    $serie=$_REQUEST['serie'];
    $diplome=$_REQUEST['diplome'];
    $formation1=$_REQUEST['formation'];
    $Password=$_REQUEST['Nom'].'.'.$_REQUEST['Prenom'].rand(1,100);
    $date=date("l d M Y h:i:sa");
    if(isset($_REQUEST['su'])){
        if($_REQUEST['ID_admin'] == "A"){
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
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-1','2','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-2','2','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-3','2','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-4','2','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-5','2','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-6','2','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-7','2','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-8','2','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-9','2','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-10','2','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-11','2','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-12','2','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-13','2','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-14','2','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-15','2','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-16','2','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-17','2','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-18','2','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-19','2','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-20','2','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-21','2','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-22','2','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-23','2','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-24','2','{$unique_id}','-')" );
                $AddNote25=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F2-25','2','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();$AddNote20->execute();$AddNote21->execute();$AddNote22->execute();$AddNote23->execute();$AddNote24->execute();
                $AddNote25->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '3'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-1','3','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-2','3','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-3','3','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-4','3','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-5','3','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-6','3','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-7','3','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-8','3','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-9','3','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-10','3','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-11','3','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-12','3','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-13','3','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-14','3','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-15','3','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-16','3','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-17','3','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-18','3','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-19','3','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-20','3','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-21','3','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-22','3','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-23','3','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F3-24','3','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();$AddNote20->execute();$AddNote21->execute();$AddNote22->execute();$AddNote23->execute();$AddNote24->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '4'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-1','4','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-2','4','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-3','4','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-4','4','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-5','4','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-6','4','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-7','4','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-8','4','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-9','4','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-10','4','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-11','4','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-12','4','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-13','4','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-14','4','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-15','4','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-16','4','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-17','4','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-18','4','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-19','4','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-20','4','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-21','4','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-22','4','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-23','4','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-24','4','{$unique_id}','-')" );
                $AddNote25=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F4-25','4','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();$AddNote20->execute();$AddNote21->execute();$AddNote22->execute();$AddNote23->execute();$AddNote24->execute();
                $AddNote25->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '5'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-1','5','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-2','5','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-3','5','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-4','5','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-5','5','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-6','5','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-7','5','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-8','5','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-9','5','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-10','5','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-11','5','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-12','5','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-13','5','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-14','5','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-15','5','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-16','5','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-17','5','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-18','5','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-19','5','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-20','5','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-21','5','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-22','5','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-23','5','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-24','5','{$unique_id}','-')" );
                $AddNote25=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-25','5','{$unique_id}','-')" );
                $AddNote26=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-26','5','{$unique_id}','-')" );
                $AddNote27=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-27','5','{$unique_id}','-')" );
                $AddNote28=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-28','5','{$unique_id}','-')" );
                $AddNote29=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-29','5','{$unique_id}','-')" );
                $AddNote30=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-30','5','{$unique_id}','-')" );
                $AddNote31=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F5-31','5','{$unique_id}','-')" );
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
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-1','6','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-2','6','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-3','6','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-4','6','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-5','6','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-6','6','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-7','6','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-8','6','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-9','6','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-10','6','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-11','6','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-12','6','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-13','6','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-14','6','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-15','6','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-16','6','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-17','6','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-18','6','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F6-19','6','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '7'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-1','7','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-2','7','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-3','7','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-4','7','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-5','7','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-6','7','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-7','7','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-8','7','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-9','7','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-10','7','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-11','7','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-12','7','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-13','7','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-14','7','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-15','7','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-16','7','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-17','7','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-18','7','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-19','7','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-20','7','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-21','7','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-22','7','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-23','7','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-24','7','{$unique_id}','-')" );
                $AddNote25=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-25','7','{$unique_id}','-')" );
                $AddNote26=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-26','7','{$unique_id}','-')" );
                $AddNote27=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-27','7','{$unique_id}','-')" );
                $AddNote28=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-28','7','{$unique_id}','-')" );
                $AddNote29=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-29','7','{$unique_id}','-')" );
                $AddNote30=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-30','7','{$unique_id}','-')" );
                $AddNote31=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-31','7','{$unique_id}','-')" );
                $AddNote32=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-32','7','{$unique_id}','-')" );
                $AddNote33=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-33','7','{$unique_id}','-')" );
                $AddNote34=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-34','7','{$unique_id}','-')" );
                $AddNote35=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-35','7','{$unique_id}','-')" );
                $AddNote36=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-36','7','{$unique_id}','-')" );
                $AddNote37=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-37','7','{$unique_id}','-')" );
                $AddNote38=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-38','7','{$unique_id}','-')" );
                $AddNote39=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-39','7','{$unique_id}','-')" );
                $AddNote40=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-40','7','{$unique_id}','-')" );
                $AddNote41=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-41','7','{$unique_id}','-')" );
                $AddNote42=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-42','7','{$unique_id}','-')" );
                $AddNote43=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-43','7','{$unique_id}','-')" );
                $AddNote44=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F7-44','7','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();$AddNote20->execute();$AddNote21->execute();$AddNote22->execute();$AddNote23->execute();$AddNote24->execute();
                $AddNote25->execute();$AddNote26->execute();$AddNote27->execute();$AddNote28->execute();$AddNote29->execute();$AddNote30->execute();$AddNote31->execute();$AddNote32->execute();
                $AddNote33->execute();$AddNote34->execute();$AddNote35->execute();$AddNote36->execute();$AddNote37->execute();$AddNote38->execute();
                $AddNote39->execute();$AddNote40->execute();$AddNote41->execute();$AddNote42->execute();$AddNote43->execute();$AddNote44->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '8'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-1','8','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-2','8','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-3','8','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-4','8','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-5','8','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-6','8','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-7','8','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-8','8','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-9','8','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-10','8','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-11','8','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-12','8','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-13','8','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-14','8','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-15','8','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-16','8','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-17','8','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-18','8','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-19','8','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-20','8','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-21','8','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-22','8','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-23','8','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-24','8','{$unique_id}','-')" );
                $AddNote25=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F8-25','8','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();$AddNote20->execute();$AddNote21->execute();$AddNote22->execute();$AddNote23->execute();$AddNote24->execute();
                $AddNote25->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '9'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-1','9','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-2','9','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-3','9','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-4','9','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-5','9','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-6','9','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-7','9','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-8','9','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-9','9','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-10','9','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-11','9','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-12','9','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-13','9','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-14','9','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-15','9','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-16','9','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-17','9','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-18','9','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-19','9','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-20','9','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-21','9','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-22','9','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-23','9','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-24','9','{$unique_id}','-')" );
                $AddNote25=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-25','9','{$unique_id}','-')" );
                $AddNote26=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-26','9','{$unique_id}','-')" );
                $AddNote27=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-27','9','{$unique_id}','-')" );
                $AddNote28=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F9-28','9','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();$AddNote20->execute();$AddNote21->execute();$AddNote22->execute();$AddNote23->execute();$AddNote24->execute();
                $AddNote25->execute();$AddNote26->execute();$AddNote27->execute();$AddNote28->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '10'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-1','10','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-2','10','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-3','10','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-4','10','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-5','10','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-6','10','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-7','10','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-8','10','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-9','10','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-10','10','{$unique_id}','-')" );
                $AddNote11=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-11','10','{$unique_id}','-')" );
                $AddNote12=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-12','10','{$unique_id}','-')" );
                $AddNote13=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-13','10','{$unique_id}','-')" );
                $AddNote14=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-14','10','{$unique_id}','-')" );
                $AddNote15=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-15','10','{$unique_id}','-')" );
                $AddNote16=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-16','10','{$unique_id}','-')" );
                $AddNote17=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-17','10','{$unique_id}','-')" );
                $AddNote18=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-18','10','{$unique_id}','-')" );
                $AddNote19=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-19','10','{$unique_id}','-')" );
                $AddNote20=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-20','10','{$unique_id}','-')" );
                $AddNote21=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-21','10','{$unique_id}','-')" );
                $AddNote22=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-22','10','{$unique_id}','-')" );
                $AddNote23=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-23','10','{$unique_id}','-')" );
                $AddNote24=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-24','10','{$unique_id}','-')" );
                $AddNote25=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-25','10','{$unique_id}','-')" );
                $AddNote26=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-26','10','{$unique_id}','-')" );
                $AddNote27=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-27','10','{$unique_id}','-')" );
                $AddNote28=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F10-28','10','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();$AddNote11->execute();$AddNote12->execute();$AddNote13->execute();$AddNote14->execute();$AddNote15->execute();$AddNote16->execute();
                $AddNote17->execute();$AddNote18->execute();$AddNote19->execute();$AddNote20->execute();$AddNote21->execute();$AddNote22->execute();$AddNote23->execute();$AddNote24->execute();
                $AddNote25->execute();$AddNote26->execute();$AddNote27->execute();$AddNote28->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '11'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F11-1','11','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F11-2','11','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F11-3','11','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F11-4','11','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F11-5','11','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F11-6','11','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F11-7','11','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F11-8','11','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F11-9','11','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F11-10','11','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '12'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F12-1','12','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F12-2','12','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F12-3','12','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F12-4','12','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F12-5','12','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F12-6','12','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F12-7','12','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F12-8','12','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F12-9','12','{$unique_id}','-')" );
                $AddNote10=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F12-10','12','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();$AddNote10->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '13'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F13-1','13','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F13-2','13','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F13-3','13','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F13-4','13','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F13-5','13','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F13-6','13','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F13-7','13','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F13-8','13','{$unique_id}','-')" );
                $AddNote9=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F13-9','13','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                $AddNote9->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }elseif($check['Formation_Etu'] == '14'){
                $AddNote1=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F14-1','14','{$unique_id}','-')" );
                $AddNote2=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F14-2','14','{$unique_id}','-')" );
                $AddNote3=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F14-3','14','{$unique_id}','-')" );
                $AddNote4=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F14-4','14','{$unique_id}','-')" );
                $AddNote5=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F14-5','14','{$unique_id}','-')" );
                $AddNote6=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F14-6','14','{$unique_id}','-')" );
                $AddNote7=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F14-7','14','{$unique_id}','-')" );
                $AddNote8=$database->prepare("INSERT INTO NoteEtu(ID_Mat,ID_Formation,ID_Etu,Note) VALUES('F14-8','14','{$unique_id}','-')" );
                $AddNote1->execute();$AddNote2->execute();$AddNote3->execute();$AddNote4->execute();$AddNote5->execute();$AddNote6->execute();$AddNote7->execute();$AddNote8->execute();
                header("refresh:1;url=InscriptionPayment.php");
            }            
        }else{
            header("refresh:1;url=Inscription.php");
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
                    <input type="email" name="email" value="<?php echo $unique_id.'@gmail.com'?>" disabled>
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
                <div class="Numero in">
                    <label><span>Code Admin D'inscription *</span></label>
                    <input type="text" name="ID_admin" required>
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
                <input type="reset" class="rest" value="An0er" >
            </div>
        </form>
    </section>
<?php include "Footer.php"; ?> 
</body>
</html>