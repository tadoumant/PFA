<?php
    // BASE DE DONNES
        $userDB="root";
        $passwordDB="root";
        $database = new PDO("mysql:host=localhost; dbname=PFA; charset=utf8;",$userDB,$passwordDB);
    // END BASE DE DONNES
    session_start();
    $unique_id=$_SESSION['ID_Etu'];
    $affichierclass=$database->prepare("SELECT * FROM DammendAtte WHERE ID_Etu='$unique_id' " );
    $affichierclass->execute();  
    foreach($affichierclass as $affichierclass){
        if($affichierclass['DocumentDemandé'] == "Attestation_d_inscription"){
            $class1=$affichierclass['ActionDmn'];       
        }elseif($affichierclass['DocumentDemandé'] == "Attestation_de_scolarité" ){
            $class2=$affichierclass['ActionDmn'];       
        }elseif($affichierclass['DocumentDemandé'] == "Relevé_de_notes"){
            $class3=$affichierclass['ActionDmn'];       
        }elseif($affichierclass['DocumentDemandé'] == "Attestation_de_réussite"){
            $class4=$affichierclass['ActionDmn'];       
        }elseif($affichierclass['DocumentDemandé'] == "BAC+3"){
            $class5=$affichierclass['ActionDmn'];       
        }elseif($affichierclass['DocumentDemandé'] == "BAC+5"){
            $class6=$affichierclass['ActionDmn'];       
        }

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
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>
<style>

    .a1{
        display: none;
    }
    .a2{
        display: none;
    }
    .a3{
        display: none;
    }
    .a4{
        display: none;
    }
    .a5{
        display: none;
    }
    .a6{
        display: none;
    }
    .a1.active{
        display: block;
    }
    .a2.active{
        display: block;
    }
    .a3.active{
        display: block;
    }
    .a4.active{
        display: block;
    }
    .a5.active{
        display: block;
    }
    .a6.active{
        display: block;
    }
  
</style>
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
    <section class="home">  
        <div id="slider">
            <div >
                <h1>DEVELOPPEUR BLOCKCHAIN & SMART CONTRACTS</h1>
                <input type="radio" name="slider" id="slide1" checked>
                <input type="radio" name="slider" id="slide2">
                <div id="slides">
                   <div id="overflow">
                      <div class="inner">
                         <div class="slide slide_1">
                            <div class="slide-content">
                              <a href="cours/cours1.php" class="mini-box " >
                                <div class="img"><img src="image/blockchaine1.jpg" alt=""></div>
                                <div class="info-box">
                                    <div class="circl"> <small>0%</small></div>
                                    <h3>Comprendre et pouvoir expliquer la technologie Blockchain et ses différentes briques</h3>
                                </div>
                              </a>
                              <a href="cours/cours2.php" class="mini-box " >
                                <div class="img"><img src="image/blockchaine2.jpg" alt=""></div>
                                <div class="info-box">
                                    <div class="circl"> <small>0%</small></div>
                                    <h3>Appréhender la Blockchain Ethereum et son fonctionnement</h3>
                                </div>
                              </a>
                              <a href="cours/cours3.php" class="mini-box " >
                                <div class="img"><img src="image/system.jpg" alt=""></div>
                                <div class="info-box">
                                    <div class="circl"> <small>0%</small></div>
                                    <h3>SYSTÈMES</h3>
                                </div>
                              </a>
                              <a href="cours/cours4.php" class="mini-box " >
                                <div class="img"><img src="image/devloEth.jpg" alt=""></div>
                                <div class="info-box">
                                    <div class="circl"> <small>0%</small></div>
                                    <h3>Exploiter les outils de développement sur Ethereum</h3>
                                </div>
                              </a>
                              <a href="cours/cours5.php" class="mini-box " >
                                <div class="img"><img src="image/solidty1.jpg" alt=""></div>
                                <div class="info-box">
                                    <div class="circl"> <small>0%</small></div>
                                    <h3>Développer avec les fondements du langage solidity</h3>
                                </div>
                              </a>
                              <a href="cours/cours6.php" class="mini-box " >
                                <div class="img"><img src="image/smart1.jpg" alt=""></div>
                                <div class="info-box">
                                    <div class="circl"> <small>0%</small></div>
                                    <h3>Utiliser les bonnes pratiques de solidity pour son smart contract</h3>
                                </div>
                              </a>
                            </div>
                         </div>

                         <div class="slide slide_2">
                            <div class="slide-content">
                              <a href="cours/cours7.php" class="mini-box " >
                                <div class="img"><img src="image/biblotheque.jpg.jpeg" alt=""></div>
                                <div class="info-box">
                                    <div class="circl"> <small>0%</small></div>
                                    <h3>Découvrir les frameworks, les bibliothèques et les services les plus utilisés sur Ethereum</h3>
                                </div>
                              </a>
                              <a href="cours/cours8.php" class="mini-box " >
                                <div class="img"><img src="image/font-end.jpg" alt=""></div>
                                <div class="info-box">
                                    <div class="circl"> <small>0%</small></div>
                                    <h3>Faire le lien avec le front-end</h3>
                                </div>
                              </a>
                              <a href="cours/cours9.php" class="mini-box " >
                                <div class="img"><img src="image/CICD.jpg.jpeg" alt=""></div>
                                <div class="info-box">
                                    <div class="circl"> <small>0%</small></div>
                                    <h3>Utiliser l’approche CI/CD pour son développement et son intégration</h3>
                                </div>
                              </a>
                              <a href="cours/cours10.php" class="mini-box " >
                                <div class="img"><img src="image/Mfid.jpg.jpeg" alt=""></div>
                                <div class="info-box">
                                    <div class="circl"> <small>0%</small></div>
                                    <h3>Maîtriser la finance décentralisée(35 heures)</h3>
                                </div>
                              </a>
                              <a href="cours/cours11.php" class="mini-box " >
                                <div class="img"><img src="22ee25f8e3_50030449_fotolia-25828130-s-page42.jpg" alt=""></div>
                                <div class="info-box">
                                    <div class="circl"> <small>0%</small></div>
                                    <h3>S’insérer professionnellement dans l’écosystème</h3>
                                </div>
                              </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
            
             <div id="controls">
              <label for="slide1"></label>
              <label for="slide2"></label>
            </div>
            <div id="bullets">
              <label for="slide1"></label>
              <label for="slide2"></label>
            </div>
        </div>

        <div id="asid1">
            <div>
                <div class="popup-box">
                    <div class="popup">
                      <div class="content1">
                        <header>
                          <p></p>
                          <i class="uil uil-times"></i>
                        </header>
                        <form action="#">
                          <div class="row title">
                            <label>Title</label>
                            <input type="text" spellcheck="false">
                          </div>
                          <div class="row description">
                            <label>Description</label>
                            <textarea spellcheck="false"></textarea>
                          </div>
                          <button></button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="wrapper">
                    <li class="add-box">
                      <div class="icon"><i class="uil uil-plus"></i></div>
                      <p>Ajouter une nouvelle note</p>
                    </li>
                  </div>
                <script src="JS/note.js"></script>
            </div>

            <div id="faqs">
                <div class="container faqs_container">
                     <!-- ------------- FICHIERS PERSONNEL ------------- -->
                     <article class="faq ">
                        <div class="faq_icon"><i class="uil uil-plus"></i></div>
                        <div class="question">
                            <h4>attestation Requis</Ri:a></h4>
                            <div class="cont" >
                                <p>Aucun fichier disponible</p>
                                <a href="attest1.php" class="a1 <?php echo $class1;?>">Attestation D'Inscription</a>
                                <a href="attest2.php" class="a2 <?php echo $class2;?>">Attestation de scolarité</a>
                                <a href="attest3.php" class="a3 <?php echo $class3;?>">Relevé de notes</a>
                                <a href="attest4.php" class="a4 <?php echo $class4;?>">Attestation de réussite</a>
                                <a href="attest5.php" class="a5 <?php echo $class5;?>">BAC+3</a>
                                <a href="attest6.php" class="a6 <?php echo $class6;?>">BAC+5</a>
                            </div>
                        </div>
                    </article>
                    <!-- ------------- FICHIERS PERSONNEL ------------- -->
                    <article class="faq ">
                        <div class="faq_icon"><i class="uil uil-plus"></i></div>
                        <div class="question">
                            <h4>Dernières Annonces</h4>
                            <div class="cont" >
                                <p>(Aucune annonce n'a encore été publiée)</p>
                            </div>
                        </div>
                    </article>
                    <!-- ------------- FICHIERS PERSONNEL ------------- -->
                    <article class="faq ">
                        <div class="faq_icon"><i class="uil uil-plus"></i></div>
                        <div class="question">
                            <h4>Derniers Badges</h4>
                            <div class="cont" >
                                <p>Vous n'avez pas de badge à afficher</p>
                            </div>
                        </div>
                    </article>
                <script src="JS/faq.js"></script>    
            </div>
            <!-- ------------- CALENDAR ------------- -->
            <div class="calendar">
                <div class="calendar-body">
                    <span class="month-name">Month</span>
                    <span class="day-name">Day</span>
                    <span class="date-number">00</span>
                    <span class="year">0000</span>
                </div>
            </div>
         </div>
         <script src="JS/calendar.js"></script>    
    </section>


<script src="JS/js.js"></script>    
</body>
</html>