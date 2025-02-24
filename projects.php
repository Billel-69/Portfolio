<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets - Billel Hakkas</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
</head>
<body>
<header>
    <div class="container">
        <h1>Billel Hakkas</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="projects.php" class="active">Projets</a></li>
                <li><a href="skills.php">Compétences</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <section id="projects">
        <div class="container">
            <h2>Mes Projets</h2>
            <div class="projects-grid">
                <!-- Projet 1 -->
                <article class="project-item fade-in">
                    <img src="img/c.png" alt="Gestion des vols en C">
                    <div class="project-info">
                        <h3>Gestion des vols en C</h3>
                        <p>Application développée en C pour gérer les vols à l'aéroport Grenoble Alpes Isère, avec recherche, affichage dynamique et gestion des retards.</p>
                        <a href="projet1.php" class="btn">Voir plus</a>
                    </div>
                </article>
                <!-- Projet 2 -->
                <article class="project-item fade-in">
                    <img src="img/s1.png" alt="Université & Transports Propres">
                    <div class="project-info">
                        <h3>Université & Transports Propres</h3>
                        <p>Site web présentant l'université et ses initiatives en faveur d'une mobilité durable et respectueuse de l'environnement.</p>
                        <a href="projet2.php" class="btn">Voir plus</a>
                    </div>
                </article>

                <!-- Projet 3 -->
                <article class="project-item fade-in">
                    <img src="img/j1.png" alt="Planification du Transport Aérien">
                    <div class="project-info">
                        <h3>Planification du Transport Aérien</h3>
                        <p>Application de gestion de l'espace aérien basée sur la coloration de graphe pour minimiser les conflits entre vols et éviter les collisions.</p>
                        <a href="projet3.php" class="btn">Voir plus</a>
                    </div>
                </article>
                <article class="project-item fade-in">
                    <img src="img/p2.png" alt="Jeu de combat type Street Fighter">
                    <div class="project-info">
                        <h3>Jeu de combat type Street Fighter</h3>
                        <p>Développement d’un jeu de combat en Python (Pygame) inspiré de Street Fighter, avec coups spéciaux, animations, différentes cartes et un menu de configuration.</p>
                        <a href="projet4.php" class="btn">Voir plus</a>
                    </div>
                </article>
                <article class="project-item fade-in">
                    <img src="img/l1.png" alt="Application communicante">
                    <div class="project-info">
                        <h3>Application communicante</h3>
                        <p>Développement d’une application répondant à un besoin client initialement imprécis, avec gestion de contenus, comptes utilisateurs et fonctionnalités collaboratives.</p>
                        <a href="projet5.php" class="btn">Voir plus</a>
                    </div>
                </article>



            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <p>&copy; 2025 Billel Hakkas - Tous droits réservés</p>
    </div>
</footer>
</body>
</html>
