<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <link rel="stylesheet" href="CSS/d.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="icon" href="../Capture d’écran 2022-07-17 à 03.37.57.png">
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="logo">
                <a href="Dashboard.php" class="logo"><i class="fab fa-accusoft"></i><span>DEAN</span></a>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i><input type="text" placeholder="Chercher...">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="Dashboard.php"><i class='bx bx-home-alt icon' ></i><span class="text nav-text">Tableau de bord</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="Profil.php"><i class="fa fa-users icon" aria-hidden="true"></i><span class="text nav-text">Profil</span></a>
                    </li>
                    <li class="nav-link">
                        <a href=""><i class="fa fa-comment icon" aria-hidden="true"></i>  <span class="text nav-text">Message</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="InscriptionProf.php"><i class="fa fa-sticky-note-o icon" aria-hidden="true"></i><span class="text nav-text">Inscription Profs</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="Info_Etu.php"><i class="fa fa-file-archive-o icon" aria-hidden="true"></i><span class="text nav-text">Info d'étudiants</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="Info_Prof.php"><i class="fa fa-file-archive-o icon" aria-hidden="true"></i><span class="text nav-text">Info des profs</span></a>
                    </li>
                    <li class="nav-link">
                        <a href=""><i class="fa fa-file-archive-o icon" aria-hidden="true"></i><span class="text nav-text">Contact des partenaire</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="AttestationRequis.php"><i class="fa fa-sticky-note-o icon" aria-hidden="true"></i><span class="text nav-text">Document Demandé</span></a>
                    </li>
                    <li class="nav-link">
                        <a href="Modifier.php"><i class="fa fa-cogs icon" aria-hidden="true"></i><span class="text nav-text">Modifier</span></a>
                    </li>
                    
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="Logout.php"><i class='bx bx-log-out icon' ></i><span class="text nav-text">Déconnecter</span></a>
                </li>
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i><i class='bx bx-sun icon sun'></i>
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
        <div class="container">
            <div class="box-gen">
                <div class="box-top">
                    <div class="box-top-1">
                            <div class="technical box ">
                                <div class="title">
                                    <h1 >Événements de la <span>plateforme</span></h1>
                                </div>
                                <div class="card">
                                    <div class="titl-card"><label>Événements partenaires</label><label>40%</label></div>
                                    <div class="e"><span style="width: 40%;" class="aa"></span></div>
                                </div>
                                <div class="card">
                                    <div class="titl-card"><label>Activités étudiantes</label><label>80%</label></div>
                                    <div class="e"><span style="width:80%;" class="b"></span></div>
                                </div>
                                <div class="card">
                                    <div class="titl-card"><label>Activités des enseignants</label><label>80%</label></div>
                                    <div class="e"><span style="width:80%;" class="c"></span></div>
                                </div>
                                <div class="card">
                                    <div class="titl-card"><label>Activités des parents</label><label>20%</label></div>
                                    <div class="e"><span style="width:20%;" class="d"></span></div>
                                </div>
                            </div>
                            <div class="professional box ">
                                <div class="title">
                                    <h1 >Professional <span>Skills</span></h1>
                                </div>
                                <div class="crad2">
                                    <div class="card3">
                                        <div class="circl"><span style="border-bottom-color: transparent;"></span>85%</div>
                                        <label>Communication</label>
                                    </div>
                                    <div class="card3">
                                        <div class="circl"><span style="border-bottom-color: transparent; border-left-color: transparent;"></span>49%</div>
                                        <label>Team Work</label>
                                    </div>
                                    <div class="card3">
                                        <div class="circl"><span style="border-right-color: transparent;"></span>76%</div>
                                        <label>Project Management</label>
                                    </div>
                                    <div class="card3">
                                        <div class="circl"><span style="border-bottom-color: transparent; border-left-color: transparent;"></span>52%</div>
                                        <label>Creativity</label> 
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="box-bottm">
                    <div class=" mini-box-bottom1">
                        <!-- <a href="Info_Prof.php"><i class="fa fa-info" aria-hidden="true"></i></a>
                        <a href="Info_Prof.php">Actualités Prof</a> -->
                        <a href="AttestationRequis.php">Attestation requis</a>
                    </div>
                    <div class="aaaa2 mini-box-bottom2">
                        <a href="Info_Etu.php"><i class="fa fa-info" aria-hidden="true"></i></a>
                        <a href="Info_Etu.php">Actualités Etu</a>
                    </div>
                </div>
            </div>
            <div class="box-right">
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
            </div>
            <div></div>
        </div>
    </section>
    <script src="JS/js.js"></script>    
</body>
</html>



    