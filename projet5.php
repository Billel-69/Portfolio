<?php
// projet5.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet 5 : Application communicante</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="project1">
<header>
    <div class="container">
        <h1>Projet 5 : Application communicante</h1>
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

<main class="container">
    <!-- Section d'introduction -->
    <section class="project-intro">
        <div class="intro-content">
            <h2>Introduction au projet</h2>
            <p>
                Dans le cadre de ce projet, l’objectif est de concevoir et de développer une application
                répondant à un besoin client initialement imprécis. En équipe, nous suivons une démarche
                de développement itérative ou incrémentale afin de clarifier et formaliser les exigences,
                puis de proposer une solution logicielle de qualité.
            </p>
        </div>
        <div class="intro-image">
            <img src="img/l1.png" alt="Application communicante">
        </div>
    </section>

    <!-- Section : Objectifs et problématique professionnelle -->
    <section class="project-description">
        <h2>Objectifs et problématique professionnelle</h2>
        <p>
            La problématique professionnelle est de créer, au sein d’une équipe, une application itérative et incrémentale
            répondant à un besoin client initialement imprécis : offrir aux utilisateurs un moyen de référencer leurs contenus
            (films, séries, livres), de partager leurs expériences et de construire une communauté.
        </p>
        <p>
            Partant de ce besoin, notre objectif est de clarifier et formaliser les fonctionnalités essentielles :
            catalogue de contenus, gestion de comptes utilisateurs, historique de visionnage, système d’avis et de notes,
            ainsi qu’un volet communautaire (forums, interactions, suivi entre utilisateurs).
        </p>
        <p>
            Le projet doit répondre à des critères de qualité (ergonomie, performances, maintenabilité) et s’appuie
            sur un socle technique maîtrisé (HTML, CSS, JavaScript, PHP, SQL). Nous utilisons également des outils
            de gestion de projet (Git, Discord, Notion) pour assurer un suivi efficace et un développement collaboratif.
        </p>
        <div class="description-images">
            <div class="image-item">
                <p>Séries et films populaires</p>

                <img src="img/l2.png" alt="populaire">
            </div>
            <div class="image-item">
                <p>Page détail et ajout des contenus</p>

                <img src="img/l3.png" alt="page contenu">
            </div>
    </section>

    <!-- Section : Descriptif générique -->
    <section class="project-instructions">
        <h2>Descriptif générique</h2>
        <p>
            Cette SAE permet, après avoir collecté et formalisé les besoins d'un client, de développer
            une application de qualité répondant à ces besoins. L'application devra s'appuyer sur
            une base de données et sur un serveur. La solution retenue doit respecter des critères
            de performance, de maintenabilité et d'ergonomie afin de proposer une expérience optimale
            aux utilisateurs.
        </p>
        <p>
            Au fil du projet, les membres de l’équipe assurent un suivi régulier du cahier des charges
            et des objectifs, tout en mettant en pratique des méthodes de gestion de projet pour
            assurer le respect des délais et la cohérence globale de l’application.
        </p>
        <!-- Lien vers le cahier des charges, stylé comme le bouton de téléchargement -->
        <div class="instruction-image">
            <a class="download-link" href="file/cahier%20des%20charge.pdf">Voir le cahier des charges</a>
        </div>
    </section>

    <!-- Section de téléchargement (si nécessaire) -->
    <section class="project-download">
        <h2>Téléchargement du projet</h2>
        <p>
            Pour consulter l’intégralité du code source et tester l’application, vous pouvez
            télécharger le projet au format ZIP.
        </p>
        <a class="download-link" href="file/projet5_app_communicante.zip" download style="pointer-events: none; background-color: gray">
            Projet en cours de développement
        </a>
    </section>
</main>

<footer>
    <div class="container">
        <p>&copy; 2025 Billel Hakkas - Tous droits réservés</p>
    </div>
</footer>
</body>
</html>
