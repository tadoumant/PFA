<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <link rel="stylesheet" href="CSS/css.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/0c6c59d6fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>
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
                        <a href="">
                            <i class="fa fa-comment icon" aria-hidden="true"></i>  
                            <span class="text nav-text">Message</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="Info_Etu.php">
                            <i class="fa fa-file-archive-o icon" aria-hidden="true"></i>
                            <span class="text nav-text"> Etudiants</span>
                        </a>
                    </li>
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
        <div class="container">
            <div class="box-gen">
                    <a href="cours/cours1.php" class="mini-box " >
                        <div class="img"><img src="image/blockchaine1.jpg" alt=""></div>
                        <div class="info-box">
                            <div class="box-circl">
                                <div class="circl"><small>0%</small></div>
                            </div> 
                            <h3>Comprendre et pouvoir expliquer la technologie Blockchain et ses différentes briques</h3>
                        </div>
                    </a>
                    <a href="cours/cours2.php" class="mini-box " >
                        <div class="img"><img src="image/blockchaine2.jpg" alt=""></div>
                        <div class="info-box">
                            <div class="box-circl">
                                <div class="circl"><small>0%</small></div>
                            </div> 
                            <h3>Appréhender la Blockchain Ethereum et son fonctionnement</h3>
                        </div>
                    </a>
                    <a href="cours/cours3.php" class="mini-box " >
                    <div class="img"><img src="image/system.jpg" alt=""></div>
                        <div class="info-box">
                            <div class="box-circl">
                                <div class="circl"><small>0%</small></div>
                            </div> 
                            <h3>SYSTÈMES</h3>
                        </div>
                    </a>
                    <a href="cours/cours4.php" class="mini-box " >
                        <div class="img"><img src="image/devloEth.jpg" alt=""></div>
                        <div class="info-box">
                            <div class="box-circl">
                                <div class="circl"><small>0%</small></div>
                            </div> 
                            <h3>Exploiter les outils de développement sur Ethereum</h3>
                        </div>
                    </a>
                    <a href="cours/cours5.php" class="mini-box " >
                        <div class="img"><img src="image/solidty1.jpg" alt=""></div>
                        <div class="info-box">
                            <div class="box-circl">
                                <div class="circl"><small>0%</small></div>
                            </div> 
                            <h3>Développer avec les fondements du langage solidity</h3>
                        </div>
                    </a>
                    <a href="cours/cours6.php" class="mini-box " >
                        <div class="img"><img src="image/smart1.jpg" alt=""></div>
                        <div class="info-box">
                            <div class="box-circl">
                                <div class="circl"><small>0%</small></div>
                            </div> 
                            <h3>Utiliser les bonnes pratiques de solidity pour son smart contract</h3>
                        </div>
                    </a>
                    <a href="cours/cours7.php" class="mini-box " >
                        <div class="img"><img src="image/biblotheque.jpg.jpeg" alt=""></div>
                        <div class="info-box">
                            <div class="box-circl">
                                <div class="circl"><small>0%</small></div>
                            </div> 
                            <h3>Découvrir les frameworks, les bibliothèques et les services les plus utilisés sur Ethereum</h3>
                        </div>
                    </a>
                    <a href="cours/cours8.php" class="mini-box " >
                        <div class="img"><img src="image/font-end.jpg" alt=""></div>
                        <div class="info-box">
                            <div class="box-circl">
                                <div class="circl"><small>0%</small></div>
                            </div> 
                            <h3>Faire le lien avec le front-end</h3>
                        </div>
                    </a>
                    <a href="cours/cours9.php" class="mini-box " >
                        <div class="img"><img src="image/Mfid.jpg.jpeg" alt=""></div>
                        <div class="info-box">
                            <div class="box-circl">
                                <div class="circl"><small>0%</small></div>
                            </div> 
                            <h3>Utiliser l’approche CI/CD pour son développement et son intégration</h3>
                        </div>
                    </a>
                    <a href="cours/cours10.php" class="mini-box " >
                        <div class="img"><img src="image/biblotheque.jpg.jpeg" alt=""></div>
                        <div class="info-box">
                            <div class="box-circl">
                                <div class="circl"><small>0%</small></div>
                            </div> 
                            <h3>Maîtriser la finance décentralisée(35 heures)</h3>
                        </div>
                    </a>
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



    