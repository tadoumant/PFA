<?php
    $userDB="root";
    $passwordDB="root";
    $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    session_start();
    $ID_Etu=$ID_EtuSub['ID_Etu1']; 
    $New_Note=$_REQUEST['New_Note'];
    $ID_Mat=$_REQUEST['ID_Mat'];

    // ----------------------------------------------------------------------------------------------
        $Info_NOTE1=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-1' " );
        $Info_NOTE1->execute();
        $Info_NOTE1=$Info_NOTE1->fetch(PDO::FETCH_ASSOC);
        if(!$Info_NOTE1['Note']== null){
            $Info_NOTE1=$Info_NOTE1['Note'];
        }else{
            $Info_NOTE1='-';
        }
        if(isset($_REQUEST['Update1'])){
            if(!$Info_NOTE1['Note'] == null){
                header("refresh:1;url=Profil.php");
            }else{
                header("refresh:1;url=1.php");
            }
        }
        
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE2=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-2' " );
        $Info_NOTE2->execute();
        $Info_NOTE2=$Info_NOTE2->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE2['Note'])){
            $Info_NOTE2=$Info_NOTE2['Note'];
            $_SESSION['Info_NOTE2']=$Info_NOTE2;
        }else{
            $Info_NOTE2='-';
        }
        
        if(isset($_REQUEST['Update2'])){
            if(!$Info_NOTE2['Note'] == null){
                header("refresh:1;url=Profil.php");
            }else{
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE3=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-3' " );
        $Info_NOTE3->execute();
        $Info_NOTE3=$Info_NOTE3->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE3['Note'])){
            $Info_NOTE3=$Info_NOTE3['Note'];
            if(isset($_REQUEST['Update3'])){
                header("refresh:1;url=Profil.php");
            }
        }else{
            $Info_NOTE3='-';
            if(isset($_REQUEST['Update3'])){
                header("refresh:1;url=1.php");
            }
        }

    // ----------------------------------------------------------------------------------------------
        $Info_NOTE4=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-4' " );
        $Info_NOTE4->execute();
        $Info_NOTE4=$Info_NOTE4->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE4['Note'])){
            $Info_NOTE4=$Info_NOTE4['Note'];
            if(isset($_REQUEST['Update4'])){
                header("refresh:1;url=Profil.php");
            }
        }else{
            $Info_NOTE4='-';
            if(isset($_REQUEST['Update4'])){
                header("refresh:1;url=Profil.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE5=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-5' " );
        $Info_NOTE5->execute();
        $Info_NOTE5=$Info_NOTE5->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE5['Note'])){
            $Info_NOTE5=$Info_NOTE5['Note'];
            if(isset($_REQUEST['Update5'])){
                header("refresh:1;url=Profil.php");
            }
        }else{
            $Info_NOTE5='-';
            if(isset($_REQUEST['Update5'])){
                header("refresh:1;url=Profil.php");
            }}
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE6=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-6' " );
        $Info_NOTE6->execute();
        $Info_NOTE6=$Info_NOTE6->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE6['Note'])){
            $Info_NOTE6=$Info_NOTE6['Note'];
            if(isset($_REQUEST['Update6'])){
                header("refresh:1;url=Profil.php");
            }
        }else{
            $Info_NOTE6='-';
            if(isset($_REQUEST['Update6'])){
                header("refresh:1;url=Profil.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE7=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-7' " );
        $Info_NOTE7->execute();
        $Info_NOTE7=$Info_NOTE7->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE7['Note'])){
            $Info_NOTE7=$Info_NOTE7['Note'];
            if(isset($_REQUEST['Update7'])){
                header("refresh:1;url=Profil.php");
            }
        }else{
            $Info_NOTE7='-';
            if(isset($_REQUEST['Update7'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE8=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-8' " );
        $Info_NOTE8->execute();
        $Info_NOTE8=$Info_NOTE8->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE8['Note'])){
            $Info_NOTE8=$Info_NOTE8['Note'];
            if(isset($_REQUEST['Update8'])){
                header("refresh:1;url=Profil.php");
            }
        }else{
            $Info_NOTE8='-';
            if(isset($_REQUEST['Update8'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE9=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-9' " );
        $Info_NOTE9->execute();
        $Info_NOTE9=$Info_NOTE9->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE9['Note'])){
            $Info_NOTE9=$Info_NOTE9['Note'];
            if(isset($_REQUEST['Update9'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE9='-';
            if(isset($_REQUEST['Update9'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE10=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-10' " );
        $Info_NOTE10->execute();
        $Info_NOTE10=$Info_NOTE10->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE10['Note'])){
            $Info_NOTE10=$Info_NOTE10['Note'];
            if(isset($_REQUEST['Update10'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE10='-';
            if(isset($_REQUEST['Update10'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE11=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-11' " );
        $Info_NOTE11->execute();
        $Info_NOTE11=$Info_NOTE11->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE11['Note'])){
            $Info_NOTE11=$Info_NOTE11['Note'];
            if(isset($_REQUEST['Update11'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE11='-';
            if(isset($_REQUEST['Update11'])){
                header("refresh:1;url=1.php");
            }}
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE12=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-12' " );
        $Info_NOTE12->execute();
        $Info_NOTE12=$Info_NOTE12->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE12['Note'])){
            $Info_NOTE12=$Info_NOTE12['Note'];
            if(isset($_REQUEST['Update12'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE12='-';
            if(isset($_REQUEST['Update12'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE13=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-13' " );
        $Info_NOTE13->execute();
        $Info_NOTE13=$Info_NOTE13->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE13['Note'])){
            $Info_NOTE13=$Info_NOTE13['Note'];
            if(isset($_REQUEST['Update13'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE13='-';
            if(isset($_REQUEST['Update13'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE14=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-14' " );
        $Info_NOTE14->execute();
        $Info_NOTE14=$Info_NOTE14->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE14['Note'])){
            $Info_NOTE14=$Info_NOTE14['Note'];
            if(isset($_REQUEST['Update14'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE14='-';
            if(isset($_REQUEST['Update14'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE15=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-15' " );
        $Info_NOTE15->execute();
        $Info_NOTE15=$Info_NOTE15->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE15['Note'])){
            $Info_NOTE15=$Info_NOTE15['Note'];
            if(isset($_REQUEST['Update15'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE15='-';
            if(isset($_REQUEST['Update15'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE16=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-16' " );
        $Info_NOTE16->execute();
        $Info_NOTE16=$Info_NOTE16->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE16['Note'])){
            $Info_NOTE16=$Info_NOTE16['Note'];
            if(isset($_REQUEST['Update16'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE16='-';
            if(isset($_REQUEST['Update16'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE17=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-17' " );
        $Info_NOTE17->execute();
        $Info_NOTE17=$Info_NOTE17->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE17['Note'])){
            $Info_NOTE17=$Info_NOTE17['Note'];
            if(isset($_REQUEST['Update17'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE17='-';
            if(isset($_REQUEST['Update17'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE18=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-18' " );
        $Info_NOTE18->execute();
        $Info_NOTE18=$Info_NOTE18->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE18['Note'])){
            $Info_NOTE18=$Info_NOTE18['Note'];
            if(isset($_REQUEST['Update18'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE18='-';
            if(isset($_REQUEST['Update18'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE19=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-19' " );
        $Info_NOTE19->execute();
        $Info_NOTE19=$Info_NOTE19->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE19['Note'])){
            $Info_NOTE19=$Info_NOTE19['Note'];
            if(isset($_REQUEST['Update19'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE19='-';
            if(isset($_REQUEST['Update19'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE20=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-20' " );
        $Info_NOTE20->execute();
        $Info_NOTE20=$Info_NOTE20->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE20['Note'])){
            $Info_NOTE20=$Info_NOTE20['Note'];
            if(isset($_REQUEST['Update20'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE20='-';
            if(isset($_REQUEST['Update20'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE21=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-21' " );
        $Info_NOTE21->execute();
        $Info_NOTE21=$Info_NOTE21->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE21['Note'])){
            $Info_NOTE21=$Info_NOTE21['Note'];
            if(isset($_REQUEST['Update21'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE21='-';
            if(isset($_REQUEST['Update21'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE22=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-22' " );
        $Info_NOTE22->execute();
        $Info_NOTE22=$Info_NOTE22->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE22['Note'])){
            $Info_NOTE22=$Info_NOTE22['Note'];
            if(isset($_REQUEST['Update22'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE22='-';
            if(isset($_REQUEST['Update22'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE23=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-23' " );
        $Info_NOTE23->execute();
        $Info_NOTE23=$Info_NOTE23->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE23['Note'])){
            $Info_NOTE23=$Info_NOTE23['Note'];
            if(isset($_REQUEST['Update23'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE23='-';
            if(isset($_REQUEST['Update23'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE24=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-24' " );
        $Info_NOTE24->execute();
        $Info_NOTE24=$Info_NOTE24->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE24['Note'])){
            $Info_NOTE24=$Info_NOTE24['Note'];
            if(isset($_REQUEST['Update24'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE24='-';
            if(isset($_REQUEST['Update24'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE25=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-25' " );
        $Info_NOTE25->execute();
        $Info_NOTE25=$Info_NOTE25->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE25['Note'])){
            $Info_NOTE25=$Info_NOTE25['Note'];
            if(isset($_REQUEST['Update25'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE25='-';
            if(isset($_REQUEST['Update25'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE26=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-26' " );
        $Info_NOTE26->execute();
        $Info_NOTE26=$Info_NOTE26->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE26['Note'])){
            $Info_NOTE26=$Info_NOTE26['Note'];
            if(isset($_REQUEST['Update26'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE26='-';
            if(isset($_REQUEST['Update26'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE27=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-27' " );
        $Info_NOTE27->execute();
        $Info_NOTE27=$Info_NOTE27->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE27['Note'])){
            $Info_NOTE27=$Info_NOTE27['Note'];
            if(isset($_REQUEST['Update27'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE27='-';
            if(isset($_REQUEST['Update27'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE28=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-28' " );
        $Info_NOTE28->execute();
        $Info_NOTE28=$Info_NOTE28->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE28['Note'])){
            $Info_NOTE28=$Info_NOTE28['Note'];
            if(isset($_REQUEST['Update28'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE28='-';
            if(isset($_REQUEST['Update28'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE29=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-29' " );
        $Info_NOTE29->execute();
        $Info_NOTE29=$Info_NOTE29->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE29['Note'])){
            $Info_NOTE29=$Info_NOTE29['Note'];
            if(isset($_REQUEST['Update29'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE29='-';
            if(isset($_REQUEST['Update29'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE30=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-30' " );
        $Info_NOTE30->execute();
        $Info_NOTE30=$Info_NOTE30->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE30['Note'])){
            $Info_NOTE30=$Info_NOTE30['Note'];
            if(isset($_REQUEST['Update30'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE30='-';
            if(isset($_REQUEST['Update30'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE31=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-31' " );
        $Info_NOTE31->execute();
        $Info_NOTE31=$Info_NOTE31->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE31['Note'])){
            $Info_NOTE31=$Info_NOTE31['Note'];
            if(isset($_REQUEST['Update31'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE31='-';
            if(isset($_REQUEST['Update31'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE32=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-32' " );
        $Info_NOTE32->execute();
        $Info_NOTE32=$Info_NOTE32->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE32['Note'])){
            $Info_NOTE32=$Info_NOTE32['Note'];
            if(isset($_REQUEST['Update32'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE32='-';
            if(isset($_REQUEST['Update32'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE33=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-33' " );
        $Info_NOTE33->execute();
        $Info_NOTE33=$Info_NOTE33->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE33['Note'])){
            $Info_NOTE33=$Info_NOTE33['Note'];
            if(isset($_REQUEST['Update33'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE33='-';
            if(isset($_REQUEST['Update33'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE34=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-34' " );
        $Info_NOTE34->execute();
        $Info_NOTE34=$Info_NOTE34->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE34['Note'])){
            $Info_NOTE34=$Info_NOTE34['Note'];
            if(isset($_REQUEST['Update34'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE34='-';
            if(isset($_REQUEST['Update34'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE35=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-35' " );
        $Info_NOTE35->execute();
        $Info_NOTE35=$Info_NOTE35->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE35['Note'])){
            $Info_NOTE35=$Info_NOTE35['Note'];
            if(isset($_REQUEST['Update35'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE35='-';
            if(isset($_REQUEST['Update35'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE36=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-36' " );
        $Info_NOTE36->execute();
        $Info_NOTE36=$Info_NOTE36->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE36['Note'])){
            $Info_NOTE36=$Info_NOTE36['Note'];
            if(isset($_REQUEST['Update36'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE36='-';
            if(isset($_REQUEST['Update36'])){
                header("refresh:1;url=1.php");
            }
        }
    // ----------------------------------------------------------------------------------------------
        $Info_NOTE37=$database->prepare("SELECT * FROM NoteEtu WHERE ID_Etu='$ID_Etu' and ID_Mat='F5-37' " );
        $Info_NOTE37->execute();
        $Info_NOTE37=$Info_NOTE37->fetch(PDO::FETCH_ASSOC);
        if(!empty($Info_NOTE37['Note'])){
            $Info_NOTE37=$Info_NOTE37['Note'];
            if(isset($_REQUEST['Update37'])){
                header("refresh:1;url=1.php");
            }
        }else{
            $Info_NOTE37='-';
            if(isset($_REQUEST['Update37'])){
                header("refresh:1;url=1.php");
            }
        }



    // include "Note_Etu.php";
?>