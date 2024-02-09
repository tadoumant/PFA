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


    require_once __DIR__.'/vendor/autoload.php';
    $mpdf= new \Mpdf\Mpdf();    
    $mpdf->AddPage("L");
    $mpdf->SetFont('Arial', 'B', 16);
    $mpdf->Cell(200,10,"Attestation de réussite ",0,1,'C');
    $mpdf->ln(10);
    $mpdf->Line(10,30,200,30);

    $mpdf->Cell(100,10,"Le Directeur Pédagogique atteste que : ",0,1);
    $mpdf->ln(10);

    $mpdf->Cell(100,10,"● ID ",0,0,);
    $mpdf->Cell(100,10,": $ID ",0,1);
    $mpdf->Cell(100,10,"● Prénom et nom",0,0);
    $mpdf->Cell(100,10,": $Prenom  $Nom ",0,0);
    $mpdf->ln(10);
    $mpdf->Cell(100,10,"● Pays de résidence",0,0);
    $mpdf->Cell(100,10,": $pays",0,1);
    $mpdf->Cell(100,10,"● Ville",0,0);
    $mpdf->Cell(100,10,": $ville",0,1);
    $mpdf->Cell(100,10,"● Date d'inscription  ",0,0);
    $mpdf->Cell(100,10,": $date",0,1);

    $mpdf->Cell(100,10,"● Filière  ",0,0);
    $mpdf->Cell(100,10,": $formation",0,1);
    $mpdf->Cell(100,10,"●  Mention ",0,0);
    $mpdf->Cell(100,10,": Asscz-Bien",0,1);


    $mpdf->Cell(100,10,"● Responsable   ",0,0);
    $mpdf->Cell(100,10,": ADMIN ",0,1);
    $mpdf->ln(10);
    $mpdf->ln(10);
    $css=file_get_contents('recu.css');
    $a=file_get_contents("recu.php");
    $mpdf ->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
    $mpdf ->Output("Rrcu.pdf","I"); //D
?>