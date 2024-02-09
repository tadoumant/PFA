<?php
    session_start();
    $ID=$_SESSION['ID_Etu'];
    $unique_id=$_SESSION['ID_Etu'];
    $Prenom=$_SESSION['Prenom'];
    $Nom=$_SESSION['Nom'];
    $Password=$_SESSION['passeord'];
    $Numero=$_SESSION['Numero'];
    $email=$_SESSION['email'];
    $pays=$_SESSION['pays'];
    $ville=$_SESSION['ville'];
    $serie=$_SESSION['serie'];
    $diplome=$_SESSION['diplome'];
    $filiere=$_SESSION['filiere'];
    $formation=$_SESSION['Name_formation'];
    $date=$_SESSION['date1'];





    $cvv=$_SESSION['cvv'];
    $number_card=$_SESSION['number_card'];
    $datecard=$_SESSION['date_card'];
    $pay=$_SESSION['Name_payer'];
    $prix=$_SESSION['prix'];


    require_once __DIR__.'/vendor/autoload.php';
    $mpdf= new \Mpdf\Mpdf();    
    $mpdf->AddPage("L");
    $mpdf->SetFont('Arial', 'B', 16);
    $mpdf->Cell(200,10,"Reçu de paiement : ",0,1,'C');
    $mpdf->ln(10);
    $mpdf->Line(10,30,200,30);
    $mpdf->Cell(100,10,"● ID ",0,0,);
    $mpdf->Cell(100,10,": $ID ",0,1);
    $mpdf->Cell(100,10,"● Prénom et nom",0,0);
    $mpdf->Cell(100,10,": $Prenom  $Nom ",0,0);
    $mpdf->ln(10);
    $mpdf->Cell(100,10,"● Pays de résidence",0,0);
    $mpdf->Cell(100,10,": $pays",0,1);
    $mpdf->Cell(100,10,"● Ville",0,0);
    $mpdf->Cell(100,10,": $ville",0,1);
    $mpdf->Cell(100,10,"● Numéro de telephone",0,0);
    $mpdf->Cell(100,10,": $Numero",0,1);
    $mpdf->ln(10);
    $mpdf->ln(10);
    $mpdf->Cell(60,10,"● Number card",0,0);
    $mpdf->Cell(100,10,": $number_card",0,0);
    $mpdf->Cell(20,10,"● CVV",0,0);
    $mpdf->Cell(20,10,": $cvv",0,1);
    $mpdf->Cell(60,10,"● Date card",0,0);
    $mpdf->Cell(100,10,": $datecard ",0,1);
    $mpdf->ln(10);
    $mpdf->Cell(100,10,"● Durée du temps payer",0,0);
    $mpdf->Cell(58,10,":$pay ",0,1);
    $mpdf->ln(10);
    $mpdf->Cell(58,10,"✓ Prix",0,0);
    $mpdf->Cell(58,10,": $prix",1,1,'R');
    $css=file_get_contents('recu.css');
    $a=file_get_contents("recu.php");
    $mpdf ->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf ->Output("Rrcu.pdf","D"); //D

?>

