-- -------------------- MySQL -----------------------------
    ------------------- !!!!! --------------------------
    ------------------- !!!!! --------------------------
    ------------------- !!!!! --------------------------
-- -------------------- MySQL -----------------------------
-- --------------------------------------------------------
-- Structure de la table `AbsenceEtu`
    CREATE TABLE `AbsenceEtu` (
    `ID_Etu` varchar(255) DEFAULT NULL,
    `Absance` varchar(255) DEFAULT NULL,
    `DateAbsance` varchar(255) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
-- Structure de la table `Admin1`
    CREATE TABLE `Admin1` (
    `ID_Admin` int(255) NOT NULL,
    `Prenom_Admin` varchar(255) NOT NULL,
    `Nom_Admin` varchar(255) NOT NULL,
    `Email_Admin` varchar(255) NOT NULL,
    `Password_Admin` varchar(255) NOT NULL,
    `Pays_Admin` varchar(255) NOT NULL,
    `Ville_Admin` varchar(255) NOT NULL,
    `NumPhone_Admin` varchar(255) NOT NULL,
    `SituationFam_Admin` varchar(255) NOT NULL,
    `Gender_Admin` varchar(255) NOT NULL,
    `PremierAccesAuSite` varchar(255) NOT NULL,
    `statusAdmin` varchar(255) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
-- Déchargement des données de la table `Admin1`
    INSERT INTO `Admin1` (`ID_Admin`, `Prenom_Admin`, `Nom_Admin`, `Email_Admin`, `Password_Admin`, `Pays_Admin`, `Ville_Admin`, `NumPhone_Admin`, `SituationFam_Admin`, `Gender_Admin`, `PremierAccesAuSite`, `statusAdmin`) 
    VALUES(1, 'DEAN', 'ADMIN', 'admin@admin.com', 'admin', 'Maroc', 'Rabat', '0661104581', 'marié', 'Mall', 'Ven 1 Juil 22', 'Active now');
-- --------------------------------------------------------
-- Structure de la table `BankAdmin`
    CREATE TABLE `BankAdmin` (
    `ID_BankAd` int(11) NOT NULL,
    `NamBank` varchar(255) NOT NULL,
    `NumberCard` varchar(255) NOT NULL,
    `CVV` varchar(255) NOT NULL,
    `IBAN` varchar(255) NOT NULL,
    `StatusPays` varchar(255) NOT NULL,
    `ID_Admin` int(11) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
-- Déchargement des données de la table `BankAdmin`
    INSERT INTO `BankAdmin` (`ID_BankAd`, `NamBank`, `NumberCard`, `CVV`, `IBAN`, `StatusPays`, `ID_Admin`) 
    VALUES(1, 'Bank of maroc', '5237181304978523', '363', 'MA52371813049785235237181304978523', 'payé', 1);
-- --------------------------------------------------------
-- Structure de la table `DammendAtte`
    CREATE TABLE `DammendAtte` (
    `ID_Etu` varchar(255) DEFAULT NULL,
    `DocumentDemandé` varchar(255) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
-- Structure de la table `Etudiants`
    CREATE TABLE `Etudiants` (
    `ID_Etu` varchar(255) NOT NULL,
    `Prenom_Etu` varchar(255) NOT NULL,
    `Nom_Etu` varchar(255) NOT NULL,
    `Pays_Etu` varchar(255) NOT NULL,
    `Ville_Etu` varchar(255) NOT NULL,
    `NumPhone_Etu` varchar(255) NOT NULL,
    `Email_Etu` varchar(255) NOT NULL,
    `SerieBAC_Etu` varchar(255) NOT NULL,
    `Niveau_Etu` varchar(255) NOT NULL,
    `Formation_Etu` varchar(255) NOT NULL,
    `Password_Etu` varchar(255) NOT NULL,
    `PremierAccesAuSite` varchar(255) NOT NULL,
    `statusEtu` varchar(255) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
-- Structure de la table `Formation`
    CREATE TABLE `Formation` (
    `ID_Form` varchar(255) NOT NULL,
    `Name_From` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
-- Déchargement des données de la table `Formation`
    INSERT INTO `Formation` (`ID_Form`, `Name_From`) 
    VALUES
        ('1', 'MANAGEMENT DES ENTREPRISES (BAC+3)'),
        ('10', 'INGÉNIERIE DES SYSTÈMES EMBARQUÉS MOBILES (BAC+5)'),
        ('11', 'DEVELOPPEUR BLOCKCHAIN & SMART CONTRACTS'),
        ('12', 'FORMATION DATA SCIENCE'),
        ('13', 'FORMATION MARKETING DIGITAL'),
        ('14', 'FORMATION SECURITE INFORMATIQUE '),
        ('2', 'AUDIT ET CONTRÔLE DE GESTION (BAC+5)'),
        ('3', 'MARKETING STRATÉGIQUE ET OPÉRATIONNEL (BAC+5)'),
        ('4', 'MANAGEMENT DES SYSTÈMES ET TECHNOLOGIES DE L’INFORMATION ET DE COMMUNICATION (BAC+5)'),
        ('5', 'MANAGEMENT INDUSTRIEL ET LOGISTIQUE (MIL, BAC+3)'),
        ('6', 'INGÉNIERIE INDUSTRIELLE ET LOGISTIQUE (IIL, BAC+5)'),
        ('7', 'INGÉNIERIE DES SYSTÈMES INFORMATIQUES (BAC+3)'),
        ('8', 'INGÉNIERIE DES SYSTÈMES D’INFORMATION (BAC+5)'),
        ('9', 'INGÉNIERIE DES SYSTÈMES RÉSEAUX ET TÉLÉCOMS (BAC+5)');
-- --------------------------------------------------------
-- Structure de la table `Matier`
    CREATE TABLE `Matier` (
    `ID_Mat` varchar(255) NOT NULL,
    `Name_Mat` varchar(255) DEFAULT NULL,
    `ID_Formation` varchar(255) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
-- Déchargement des données de la table `Matier`
    INSERT INTO `Matier` (`ID_Mat`, `Name_Mat`, `ID_Formation`) 
    VALUES
        ('F1-1', 'Structure et Fonctionnement des Entreprises :( Organisation et Fonctionnement d’Entreprises )', '1'),
        ('F1-10', 'Comptabilité Générale II', '1'),
        ('F1-11', 'Introduction au Droit', '1'),
        ('F1-12', 'Introduction à l’Architecture des Ordinateurs', '1'),
        ('F1-13', 'Mathématiques Financières', '1'),
        ('F1-14', 'Techniques de Communication :( Français – Anglais )', '1'),
        ('F1-15', 'Projet de Fin d’Année', '1'),
        ('F1-16', 'Aspects Avancés du Marketing', '1'),
        ('F1-17', 'Le Web Marketing', '1'),
        ('F1-18', 'Management de la Communication dans l’Entreprise', '1'),
        ('F1-19', 'Gestion du Changement', '1'),
        ('F1-2', 'Management des Entreprises :( Introduction au Management– Gestion des Entreprises )', '1'),
        ('F1-20', 'Introduction à la Finance', '1'),
        ('F1-21', 'Comptabilité Générale Informatisée', '1'),
        ('F1-22', 'Système d’Information', '1'),
        ('F1-23', 'Techniques de Communication :( Français – Anglais )', '1'),
        ('F1-24', 'Business Plan et Etude de Projet', '1'),
        ('F1-25', 'Comptabilité Analytique', '1'),
        ('F1-26', 'Comptabilité Générale Informatisée : Préparation à la Certification SAGE', '1'),
        ('F1-27', 'Gestion des Opérations', '1'),
        ('F1-28', 'Système de Gestion des Bases de Données', '1'),
        ('F1-29', 'Droit des Affaires', '1'),
        ('F1-3', 'Economie Générale :( Micro et Macro économie )', '1'),
        ('F1-30', 'Techniques de Communication :( Français – Anglais )', '1'),
        ('F1-31', 'Projet de Fin d’Année', '1'),
        ('F1-32', 'Economie Internationale', '1'),
        ('F1-33', 'Contrôle de Gestion', '1'),
        ('F1-34', 'Management Stratégique', '1'),
        ('F1-35', 'Gestion Financière', '1'),
        ('F1-36', 'Fiscalité', '1'),
        ('F1-37', 'Création des Entreprises', '1'),
        ('F1-38', 'E-Recrutement', '1'),
        ('F1-39', 'Techniques de Communication :( Français – Anglais )', '1'),
        ('F1-4', 'Initiation à l’Informatique :( Environnement Bureautique– Introduction au Système d’Exploitation )', '1'),
        ('F1-40', 'Ingénierie Financière', '1'),
        ('F1-41', 'GRH : Gestion des Ressources Humaines', '1'),
        ('F1-42', 'Droit du travail', '1'),
        ('F1-43', 'Politique Economique et Monétair', '1'),
        ('F1-44', 'Techniques Bancaires', '1'),
        ('F1-45', 'Projet de fin de cycle', '1'),
        ('F1-5', 'Comptabilité Générale I', '1'),
        ('F1-6', 'Mathématiques :( Analyse I – Statistiques )', '1'),
        ('F1-7', 'Techniques de Communication :( Français – Anglais )', '1'),
        ('F1-8', 'Management et Financement par projet', '1'),
        ('F1-9', 'Marketing de base', '1'),
        ('F10-1', 'Systèmes Télécoms I', '10'),
        ('F10-10', 'Traitement de l’Information et Codage Avancé', '10'),
        ('F10-11', 'Sécurité Informatique Avancée', '10'),
        ('F10-12', 'Gestion de Projets', '10'),
        ('F10-13', 'Création d’Entreprise', '10'),
        ('F10-14', 'Mathématiques Financières', '10'),
        ('F10-15', 'Techniques de Communication :( Français – Anglais )', '10'),
        ('F10-16', 'Projet de Fin d’Année', '10'),
        ('F10-17', 'Systèmes Télécoms II', '10'),
        ('F10-18', 'Dimensionnement des réseaux', '10'),
        ('F10-19', 'VOIP/MPLS', '10'),
        ('F10-2', 'Développement Distribué et 2EE', '10'),
        ('F10-20', 'Réseaux Intelligents', '10'),
        ('F10-21', 'Systèmes Mobile et Ingénierie Radio', '10'),
        ('F10-22', 'Communications par Satellite', '10'),
        ('F10-23', 'Communication Optiques', '10'),
        ('F10-24', 'Méthodologie de Mémoire en Anglais', '10'),
        ('F10-25', 'Techniques de Communication :( Français – Anglais )', '10'),
        ('F10-26', 'Développement Personnel', '10'),
        ('F10-27', 'Projet de Fin d’Etudes', '10'),
        ('F10-28', 'Séminaires', '10'),
        ('F10-3', 'Interconnexion des réseaux (CCNA 3/4)', '10'),
        ('F10-4', 'BD Aspect Avancés et Certification Oracle', '10'),
        ('F10-5', 'Administration et Sécurité pour SI', '10'),
        ('F10-6', 'Techniques de Communication :( Français – Anglais )', '10'),
        ('F10-7', 'Communication Numérique', '10'),
        ('F10-8', 'Communication Télécoms', '10'),
        ('F10-9', 'Géolocalisation et SIG', '10'),
        ('F11-1', 'Comprendre et pouvoir expliquer la technologie Blockchain et ses différentes briques', '11'),
        ('F11-10', 'S’insérer professionnellement dans l’écosystème ', '11'),
        ('F11-2', 'Appréhender la Blockchain Ethereum et son fonctionnement', '11'),
        ('F11-3', 'Exploiter les outils de développement sur Ethereum', '11'),
        ('F11-4', 'Développer avec les fondements du langage solidity ', '11'),
        ('F11-5', 'Utiliser les bonnes pratiques de solidity pour son smart contract ', '11'),
        ('F11-6', 'Découvrir les frameworks, les bibliothèques et les services les plus utilisés sur Ethereum', '11'),
        ('F11-7', 'Faire le lien avec le front-end', '11'),
        ('F11-8', 'Utiliser l’approche CI/CD pour son développement et son intégration', '11'),
        ('F11-9', 'Maîtriser la finance décentralisée', '11'),
        ('F12-1', 'Les outils du scientifique des données', '12'),
        ('F12-10', 'Pojet final de science des données', '12'),
        ('F12-2', 'La programmation en R', '12'),
        ('F12-3', 'Obtenir et trier des données', '12'),
        ('F12-4', 'Exploration analytique de données', '12'),
        ('F12-5', 'Recherche reproductible', '12'),
        ('F12-6', 'Inférence statistique', '12'),
        ('F12-7', 'Modèles de régression', '12'),
        ('F12-8', 'Apprentissage mécanique pratique', '12'),
        ('F12-9', 'Développement de produits de données', '12'),
        ('F13-1', 'Médias Sociaux', '13'),
        ('F13-2', 'Facebook Ads & Linkedin Ads', '13'),
        ('F13-3', 'Conversion De Son Audience', '13'),
        ('F13-4', 'Web Design Et Web Dev Pour Web Marketeurs', '13'),
        ('F13-5', 'Référencement Payant', '13'),
        ('F13-6', 'Affiliation', '13'),
        ('F13-7', 'E-Mailing', '13'),
        ('F13-8', 'Mesure De La Performance De Son Webmarketing', '13'),
        ('F13-9', 'Le E-Commerce', '13'),
        ('F14-1', 'SCIENCES DE INGÉNIEUR', '14'),
        ('F14-2', 'DÉVELOPPEMENT', '14'),
        ('F14-3', 'SYSTÈMES', '14'),
        ('F14-4', 'RÉSEAUX', '14'),
        ('F14-5', 'SÉCURITÉ', '14'),
        ('F14-6', 'MANAGEMENT DE PROJETS', '14'),
        ('F14-7', 'ACTIVITÉS ANNUELLES', '14'),
        ('F14-8', 'OUTILS DE COMMUNICATION', '14'),
        ('F2-1', 'Management des Projets', '2'),
        ('F2-10', 'Audit du système d’information', '2'),
        ('F2-11', 'Audit Comptable et Financier', '2'),
        ('F2-12', 'Audit Social et contrôle de Gestion Social', '2'),
        ('F2-13', 'Finance de Marché et Gestion de Portefeuille', '2'),
        ('F2-14', 'Techniques de Communication: Français – Anglais', '2'),
        ('F2-15', 'Projet de Fin d’Année', '2'),
        ('F2-16', 'Audit et contrôle Juridique et Fiscal', '2'),
        ('F2-17', 'Contrôle Interne et gestion des risques', '2'),
        ('F2-18', 'Contrôle de Gestion et gestion budgétaire', '2'),
        ('F2-19', 'Contrôle de Gestion Approfondi', '2'),
        ('F2-2', 'Marketing International', '2'),
        ('F2-20', 'Audit spécifique et Audit Stratégique', '2'),
        ('F2-21', 'SI Décisionnel', '2'),
        ('F2-22', 'Développement Personnel', '2'),
        ('F2-23', 'Méthodologie de Mémoire en Anglais', '2'),
        ('F2-24', 'Projet de Fin d’Etudes', '2'),
        ('F2-25', 'Séminaires', '2'),
        ('F2-3', 'Audit des Procédures et Tableaux de Bord', '2'),
        ('F2-4', 'Finance Internationale', '2'),
        ('F2-5', 'Analyse de Données des Systèmes d’Information', '2'),
        ('F2-6', 'Techniques de Communication: Français – Anglais', '2'),
        ('F2-7', 'Transformation Digitale', '2'),
        ('F2-8', 'Commerce Electronique', '2'),
        ('F2-9', 'Normes et méthodologie de l’Audit', '2'),
        ('F3-1', 'Management des Projets', '3'),
        ('F3-10', 'Marketing de Vente, d’Achat et de Négociation', '3'),
        ('F3-11', 'Publicité et Concurrence', '3'),
        ('F3-12', 'Techniques de Communication :( Français – Anglais )', '3'),
        ('F3-13', 'Projet de Fin d’Année', '3'),
        ('F3-14', 'CRM : Management de la Relation Client', '3'),
        ('F3-15', 'Management des équipes et Gestion des conflits', '3'),
        ('F3-16', 'Marketing direct et Marketing des services', '3'),
        ('F3-17', 'Datamining', '3'),
        ('F3-18', 'Marketing Digital', '3'),
        ('F3-19', 'Contrôle de Gestion Approfondi', '3'),
        ('F3-2', 'Marketing International', '3'),
        ('F3-20', 'Développement Personnel', '3'),
        ('F3-21', 'Méthodologie de Mémoire en Anglais', '3'),
        ('F3-22', 'Techniques de Communication :( Français – Anglais )', '3'),
        ('F3-23', 'Projet de Fin d’Etudes', '3'),
        ('F3-24', 'Séminaires', '3'),
        ('F3-3', 'Audit des Procédures et Tableaux de Bord', '3'),
        ('F3-4', 'Finance Internationale', '3'),
        ('F3-5', 'Analyse de Données des Systèmes d’Information', '3'),
        ('F3-6', 'Techniques de Communication :( Français – Anglais )', '3'),
        ('F3-7', 'Transformation Digitale', '3'),
        ('F3-8', 'Audit du système d’information', '3'),
        ('F3-9', 'Commerce Electronique', '3'),
        ('F4-1', 'Management des Projets', '4'),
        ('F4-10', 'Audit Social et contrôle de Gestion Social', '4'),
        ('F4-11', 'Finance de marché : Gestion de Portefeuille', '4'),
        ('F4-12', 'Techniques Bancaires Avancées', '4'),
        ('F4-13', 'Techniques de Communication :( Français – Anglais )', '4'),
        ('F4-14', 'Projet de Fin d’Année', '4'),
        ('F4-15', 'CRM : Management de la Relation Client', '4'),
        ('F4-16', 'Management des équipes et Gestion des conflits', '4'),
        ('F4-17', 'Marketing direct et Marketing des services', '4'),
        ('F4-18', 'Datamining', '4'),
        ('F4-19', 'Finance Avancée', '4'),
        ('F4-2', 'Marketing International', '4'),
        ('F4-20', 'Contrôle de Gestion Approfondi', '4'),
        ('F4-21', 'Développement Personnel', '4'),
        ('F4-22', 'Méthodologie de Mémoire en Anglais', '4'),
        ('F4-23', 'Techniques de Communication :( Français – Anglais )', '4'),
        ('F4-24', 'Projet de Fin d’Etudes', '4'),
        ('F4-25', 'Séminaires', '4'),
        ('F4-3', 'Audit des Procédures et Tableaux de Bord', '4'),
        ('F4-4', 'Finance Internationale', '4'),
        ('F4-5', 'Analyse de Données des Systèmes d’Information', '4'),
        ('F4-6', 'Techniques de Communication :( Français – Anglais )', '4'),
        ('F4-7', 'Transformation Digitale', '4'),
        ('F4-8', 'Audit du système d’information', '4'),
        ('F4-9', 'Commerce Electronique', '4'),
        ('F5-1', 'Mathématiques Générales I :( Analyse I – Algèbre )', '5'),
        ('F5-10', 'Langage C : Aspect Avancé', '5'),
        ('F5-11', 'Probabilités et statistiques', '5'),
        ('F5-12', 'Circuits logiques', '5'),
        ('F5-13', 'Thermodynamique & Technologie pratique', '5'),
        ('F5-14', 'Techniques de Communication :( Français – Anglais )', '5'),
        ('F5-15', 'Projet de Fin d’Année', '5'),
        ('F5-16', 'Informatique Industrielle : Modélisation des processus Industriels /Bases de Données I<', '5'),
        ('F5-17', 'Théorie des graphes et Programmation Linéaire', '5'),
        ('F5-18', 'Mécanique et application', '5'),
        ('F5-19', 'Électromagnétisme', '5'),
        ('F5-2', 'Management des Entreprises :( Introduction au Management – Gestion des Entreprises )', '5'),
        ('F5-20', 'Dessin industriel et initiation technique', '5'),
        ('F5-21', 'Techniques de Communication :( Français – Anglais )', '5'),
        ('F5-22', 'RDM (Base de la conception)', '5'),
        ('F5-23', 'Développement des applications Web', '5'),
        ('F5-24', 'DAO et outils Matlab', '5'),
        ('F5-25', 'Comptabilité générale', '5'),
        ('F5-26', 'Electronique et Projet', '5'),
        ('F5-27', 'Techniques de Communication :( Français – Anglais )', '5'),
        ('F5-28', 'Projet de Fin d’Année', '5'),
        ('F5-29', 'Achat, approvisionnement et chaîne logistique', '5'),
        ('F5-3', 'Initiation à l’Informatique', '5'),
        ('F5-30', 'Procédés de fabrication et risques industriels', '5'),
        ('F5-31', 'Logistique, Transport, Gestion des Entrepôts et Distribution', '5'),
        ('F5-32', 'Analyse des données', '5'),
        ('F5-33', 'Systèmes d’information appliqués à la gestion des flux', '5'),
        ('F5-34', 'Techniques de Communication :( Français – Anglais )', '5'),
        ('F5-35', 'Gestion de la Production et de la maintenance', '5'),
        ('F5-36', 'Management de la Qualité', '5'),
        ('F5-37', 'Gestion de Projet & Projets de création d’entreprise', '5'),
        ('F5-38', 'Projet de fin de cycle', '5'),
        ('F5-4', 'Algorithmique', '5'),
        ('F5-5', 'Programmation : Langage C', '5'),
        ('F5-6', 'Electricité :( Électrocinétique – Électrostatique )', '5'),
        ('F5-7', 'Techniques de Communication :( Français – Anglais )', '5'),
        ('F5-8', 'Architecture des ordinateurs I', '5'),
        ('F5-9', 'Algorithmique avancée', '5'),
        ('F6-1', 'Automates Programmables industriels', '6'),
        ('F6-10', 'Gestion des Achats et de l’Approvisionnement et Sureté de Fonctionnement', '6'),
        ('F6-11', 'upervisons industrielle et MES', '6'),
        ('F6-12', 'Techniques de communication :( Français – Anglais )', '6'),
        ('F6-13', 'Projet de Fin d’Année', '6'),
        ('F6-14', 'Supply Chain Management et Techniques du commerce et des affaires internationales', '6'),
        ('F6-15', 'Lean Management et Six Sigma', '6'),
        ('F6-16', 'Qualité et Management des Risques', '6'),
        ('F6-17', 'Management Visuel et Tableau de Bord', '6'),
        ('F6-18', 'E_Logistique et Industrie 4.0', '6'),
        ('F6-19', 'Projet de Fin d’Etudes', '6'),
        ('F6-2', 'Logistique Industrielle et Transport', '6'),
        ('F6-3', 'Conception et fabrication assistées par ordinateurs (CFAO)', '6'),
        ('F6-4', 'Réseaux Locaux Industriels', '6'),
        ('F6-5', 'Mathématiques et Finances pour l’ingénieur', '6'),
        ('F6-6', 'Techniques de communication :( Français – Anglais )', '6'),
        ('F6-7', 'Systèmes d’Information Décisionnels', '6'),
        ('F6-8', 'Simulation industrielle et logistique', '6'),
        ('F6-9', 'Management industriel :(GPAO) / (GMAO)', '6'),
        ('F7-1', 'Algorithmique', '7'),
        ('F7-10', 'Langage C : Aspect Avancé', '7'),
        ('F7-11', 'Architecture des Ordinateurs I', '7'),
        ('F7-12', 'Circuits Logiques', '7'),
        ('F7-13', 'Probabilités & Statistiques', '7'),
        ('F7-14', 'Mathématiques Financières', '7'),
        ('F7-15', 'Techniques de Communication :( Français – Anglais )', '7'),
        ('F7-16', 'Projet de Fin d’Année', '7'),
        ('F7-17', 'Bases de données I', '7'),
        ('F7-18', 'Systèmes d’Information', '7'),
        ('F7-19', 'Architecture des Ordinateurs II', '7'),
        ('F7-2', 'Programmation : Langage C', '7'),
        ('F7-20', 'Electronique Numérique', '7'),
        ('F7-21', 'Théorie des Graphes et Programmation Linéaire', '7'),
        ('F7-22', 'Transmission de Données', '7'),
        ('F7-23', 'Techniques de Communication :( Français – Anglais )', '7'),
        ('F7-24', 'Base de Données II', '7'),
        ('F7-25', 'Développement des Applications Web', '7'),
        ('F7-26', 'Systèmes d’Exploitation : UNIX', '7'),
        ('F7-27', 'Téléinformatique et Réseaux Locaux', '7'),
        ('F7-28', 'Projet BD-SI : Base de Données et Système d’Information', '7'),
        ('F7-29', 'Techniques de Communication :( Français – Anglais )', '7'),
        ('F7-3', 'Environnement Bureautique et Internet', '7'),
        ('F7-30', 'Projet de Fin d’Année', '7'),
        ('F7-31', 'Génie Logiciel', '7'),
        ('F7-32', 'UML', '7'),
        ('F7-33', 'Développement Orienté Objet : JAVA', '7'),
        ('F7-34', 'Programmation : Langage Python I', '7'),
        ('F7-35', 'TCP/IP', '7'),
        ('F7-36', 'Programmation Réseaux', '7'),
        ('F7-37', 'Analyse de données', '7'),
        ('F7-38', 'E-Recrutement', '7'),
        ('F7-39', 'Techniques de Communication :( Français – Anglais )', '7'),
        ('F7-4', 'Introduction au Système d’Exploitation', '7'),
        ('F7-40', 'Intelligence Artificielle', '7'),
        ('F7-41', 'Administration du système Windows', '7'),
        ('F7-42', 'Administration du système UNIX', '7'),
        ('F7-43', 'Administration de Bases de Données', '7'),
        ('F7-44', 'Programmation : Langage Python II', '7'),
        ('F7-45', 'Projet de fin de cycle', '7'),
        ('F7-5', 'Mathématiques : Analyse / Algèbre', '7'),
        ('F7-6', 'Management des Entreprises', '7'),
        ('F7-7', 'Introduction à l’Economie', '7'),
        ('F7-8', 'Techniques de Communication :( Français – Anglais )', '7'),
        ('F7-9', 'Algorithmique Avancée', '7'),
        ('F8-1', 'Processus de Développement Agiles et Certification Scrum', '8'),
        ('F8-10', 'Sécurité Informatique Avancée', '8'),
        ('F8-11', 'Traitement d’Image et Multimédia', '8'),
        ('F8-12', 'Gestion de Projets', '8'),
        ('F8-13', 'Création d’Entreprise', '8'),
        ('F8-14', 'Techniques de communication :( Français – Anglais )', '8'),
        ('F8-15', 'Projet de Fin d’Année', '8'),
        ('F8-16', 'J2EE Avancé', '8'),
        ('F8-17', 'Développement Mobile Android', '8'),
        ('F8-18', 'Base de Données Avancées', '8'),
        ('F8-19', 'Modélisation Avancée de Logiciels', '8'),
        ('F8-2', 'Développement Distribué et J2EE', '8'),
        ('F8-20', 'Systèmes Mobile et Ingénierie Radio', '8'),
        ('F8-21', 'Datamining et Data warehouse', '8'),
        ('F8-22', 'Méthodologie de Mémoire en Anglais', '8'),
        ('F8-23', 'Techniques de communication :( Français – Anglais )', '8'),
        ('F8-24', 'Projet de Fin d’Etudes', '8'),
        ('F8-25', 'Séminaires', '8'),
        ('F8-3', 'BD Aspect Avancé et Certification Oracle', '8'),
        ('F8-4', 'Interconnexion des réseaux (CCNA 3/4)', '8'),
        ('F8-5', 'Administration et Sécurité pour SI', '8'),
        ('F8-6', 'Techniques de communication :( Français – Anglais )', '8'),
        ('F8-7', 'Audit Schéma Directeur des SI', '8'),
        ('F8-8', 'Géolocalisation et SIG', '8'),
        ('F8-9', 'Pratique Avancée des Langages PHP 5 et Dot Net', '8'),
        ('F9-1', 'Systèmes Télécoms I', '9'),
        ('F9-10', 'Traitement de l’Information et Codage Avancé', '9'),
        ('F9-11', 'Sécurité Informatique Avancée', '9'),
        ('F9-12', 'Gestion de Projets', '9'),
        ('F9-13', 'Création d’Entreprise', '9'),
        ('F9-14', 'Mathématiques Financières', '9'),
        ('F9-15', 'Techniques de Communication :( Français – Anglais )', '9'),
        ('F9-16', 'Projet de Fin d’Année', '9'),
        ('F9-17', 'Systèmes Télécoms II', '9'),
        ('F9-18', 'Dimensionnement des réseaux', '9'),
        ('F9-19', 'VOIP/MPLS', '9'),
        ('F9-2', 'Développement Distribué et 2EE', '9'),
        ('F9-20', 'Réseaux Intelligents', '9'),
        ('F9-21', 'Systèmes Mobile et Ingénierie Radio', '9'),
        ('F9-22', 'Communications par Satellite', '9'),
        ('F9-23', 'Communication Optiques', '9'),
        ('F9-24', 'Méthodologie de Mémoire en Anglais', '9'),
        ('F9-25', 'Transmission de Données', '9'),
        ('F9-26', 'Techniques de Communication :( Français – Anglais )', '9'),
        ('F9-27', 'Projet de Fin d’Etudes', '9'),
        ('F9-28', 'Séminaires', '9'),
        ('F9-3', 'Interconnexion des réseaux (CCNA 3/4)', '9'),
        ('F9-4', 'BD Aspect Avancés et Certification Oracle', '9'),
        ('F9-5', 'Administration et Sécurité pour SI', '9'),
        ('F9-6', 'Techniques de Communication :( Français – Anglais )', '9'),
        ('F9-7', 'Communication Numérique', '9'),
        ('F9-8', 'Communication Télécoms', '9'),
        ('F9-9', 'Géolocalisation et SIG', '9');
-- --------------------------------------------------------
-- Structure de la table `NoteEtu`
    CREATE TABLE `NoteEtu` (
    `ID_Mat` varchar(255) DEFAULT NULL,
    `ID_Formation` varchar(255) DEFAULT NULL,
    `ID_Etu` varchar(255) DEFAULT NULL,
    `Note` varchar(255) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
-- Structure de la table `Paiments`
    CREATE TABLE `Paiments` (
    `ID_Paye` varchar(255) NOT NULL,
    `DelaiPaiement` varchar(255) NOT NULL,
    `NumberCard` varchar(255) NOT NULL,
    `CVV` varchar(255) NOT NULL,
    `DateCard` varchar(255) NOT NULL,
    `ID_Etu` varchar(255) NOT NULL,
    `Payee` varchar(255) DEFAULT NULL,
    `Prix` varchar(255) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
-- Structure de la table `Profs`
    CREATE TABLE `Profs` (
    `ID_Prof` varchar(255) NOT NULL,
    `Prenom_Prof` varchar(255) NOT NULL,
    `Nom_Prof` varchar(255) NOT NULL,
    `NationaliteID_Prof` varchar(255) NOT NULL,
    `Email_Prof` varchar(255) NOT NULL,
    `Pays_Prof` varchar(255) NOT NULL,
    `Ville_Prof` varchar(255) NOT NULL,
    `NumPhone_Prof` varchar(255) NOT NULL,
    `SituationFam_Prof` varchar(255) NOT NULL,
    `Formation_Prof` varchar(255) NOT NULL,
    `PremierDateEmbauche` varchar(255) NOT NULL,
    `CV_Prof` varchar(255) NOT NULL,
    `Gender_Prof` varchar(255) NOT NULL,
    `Password_Prof` varchar(255) NOT NULL,
    `PremierAccesAuSite` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
-- Index pour la table `AbsenceEtu`
    ALTER TABLE `AbsenceEtu` ADD KEY `ID_Etu` (`ID_Etu`);
-- --------------------------------------------------------
-- Index pour la table `Admin1`
    ALTER TABLE `Admin1` ADD PRIMARY KEY (`ID_Admin`);
-- --------------------------------------------------------
-- Index pour la table `BankAdmin`
    ALTER TABLE `BankAdmin` ADD PRIMARY KEY (`ID_BankAd`), ADD KEY `ID_Admin` (`ID_Admin`);
-- --------------------------------------------------------
-- Index pour la table `DammendAtte`
    ALTER TABLE `DammendAtte` ADD KEY `ID_Etu` (`ID_Etu`);
-- --------------------------------------------------------
-- Index pour la table `Etudiants`
    ALTER TABLE `Etudiants` ADD PRIMARY KEY (`ID_Etu`), ADD KEY `Formation_Etu` (`Formation_Etu`);
-- --------------------------------------------------------
-- Index pour la table `Formation`
    ALTER TABLE `Formation` ADD PRIMARY KEY (`ID_Form`);
-- --------------------------------------------------------
-- Index pour la table `Matier`
    ALTER TABLE `Matier` ADD PRIMARY KEY (`ID_Mat`), ADD KEY `ID_Formation` (`ID_Formation`);
-- --------------------------------------------------------
-- Index pour la table `NoteEtu`
    ALTER TABLE `NoteEtu` ADD KEY `ID_Etu` (`ID_Etu`), ADD KEY `ID_Formation` (`ID_Formation`), ADD KEY `ID_Mat` (`ID_Mat`);
-- --------------------------------------------------------
-- Index pour la table `Paiments`
    ALTER TABLE `Paiments` ADD PRIMARY KEY (`ID_Paye`), ADD KEY `ID_Etu` (`ID_Etu`);
-- --------------------------------------------------------
-- Index pour la table `Profs`
    ALTER TABLE `Profs` ADD PRIMARY KEY (`ID_Prof`), ADD KEY `Formation_Prof` (`Formation_Prof`);
-- --------------------------------------------------------
-- AUTO_INCREMENT pour la table `BankAdmin`
    ALTER TABLE `BankAdmin` MODIFY `ID_BankAd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
-- --------------------------------------------------------
-- Contraintes pour la table `AbsenceEtu`
    ALTER TABLE `AbsenceEtu` ADD CONSTRAINT `absenceetu_ibfk_1` FOREIGN KEY (`ID_Etu`) REFERENCES `Etudiants` (`ID_Etu`);
-- --------------------------------------------------------
-- Contraintes pour la table `BankAdmin`
    ALTER TABLE `BankAdmin` ADD CONSTRAINT `bankadmin_ibfk_1` FOREIGN KEY (`ID_Admin`) REFERENCES `admin1` (`ID_Admin`);
-- --------------------------------------------------------
-- Contraintes pour la table `DammendAtte`
    ALTER TABLE `DammendAtte` ADD CONSTRAINT `dammendatte_ibfk_1` FOREIGN KEY (`ID_Etu`) REFERENCES `Etudiants` (`ID_Etu`);
-- --------------------------------------------------------
-- Contraintes pour la table `Etudiants`
    ALTER TABLE `Etudiants` ADD CONSTRAINT `etudiants_ibfk_1` FOREIGN KEY (`Formation_Etu`) REFERENCES `Formation` (`ID_Form`);
-- --------------------------------------------------------
-- Contraintes pour la table `Matier`
    ALTER TABLE `Matier` ADD CONSTRAINT `matier_ibfk_1` FOREIGN KEY (`ID_Formation`) REFERENCES `Formation` (`ID_Form`);
-- --------------------------------------------------------
-- Contraintes pour la table `NoteEtu`
    ALTER TABLE `NoteEtu` ADD CONSTRAINT `noteetu_ibfk_1` FOREIGN KEY (`ID_Etu`) REFERENCES `Etudiants` (`ID_Etu`),
            ADD CONSTRAINT `noteetu_ibfk_2` FOREIGN KEY (`ID_Formation`) REFERENCES `Formation` (`ID_Form`),
            ADD CONSTRAINT `noteetu_ibfk_3` FOREIGN KEY (`ID_Mat`) REFERENCES `Matier` (`ID_Mat`);
-- --------------------------------------------------------
-- Contraintes pour la table `Paiments`
    ALTER TABLE `Paiments` ADD CONSTRAINT `paiments_ibfk_1` FOREIGN KEY (`ID_Etu`) REFERENCES `Etudiants` (`ID_Etu`);
-- --------------------------------------------------------
-- Contraintes pour la table `Profs`
    ALTER TABLE `Profs` ADD CONSTRAINT `profs_ibfk_1` FOREIGN KEY (`Formation_Prof`) REFERENCES `Formation` (`ID_Form`); 
-- --------------------------------------------------------
-- -------------------- MySQL -----------------------------
    ------------------- !!!!! --------------------------
    ------------------- !!!!! --------------------------
    ------------------- !!!!! --------------------------
-- -------------------- MySQL -----------------------------
