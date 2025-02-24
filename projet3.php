<?php
// projet3.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet 3 : Planification du Transport Aérien</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="project1">
<header>
    <div class="container">
        <h1>Projet 3 : Planification du Transport Aérien</h1>
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
    <!-- Section d'introduction avec image intégrée -->
    <section class="project-intro">
        <div class="intro-content">
            <h2>Introduction au projet</h2>
            <p>
                Le projet "Planification du Transport Aérien" a pour objectif de gérer l’espace aérien français pour un ensemble de vols entre plusieurs aéroports. Afin d’éviter les collisions potentielles, l’application attribue des niveaux de vol (de 1 à kmax) aux vols susceptibles de se croiser, modélisant ainsi le problème sous forme de coloration de graphe.
            </p>
        </div>
        <div class="intro-image">
            <img src="img/j1.png" alt="Planification du Transport Aérien">
        </div>
    </section>

    <!-- Section de description détaillée du projet -->
    <section class="project-description">
        <h2>Description détaillée</h2>
        <p>
            Le système doit analyser les données issues de fichiers CSV contenant les informations des aéroports et des vols. À partir de ces données, un graphe d’intersection est construit : chaque vol correspond à un sommet et une arête relie deux vols si leurs trajectoires s’intersectent et si l’écart entre leurs horaires de passage est inférieur à 15 minutes.
        </p>
        <p>
            L’objectif est de colorier ce graphe en utilisant au maximum kmax couleurs, de façon à minimiser le nombre de conflits (cas où deux vols en collision se voient attribuer la même couleur). Des algorithmes de coloration seront développés et testés, et la visualisation du graphe se fera via la librairie Graphstream.
        </p>
        <div class="description-images">
            <div class="image-item">
                <p>Construction de la carte d'intersection</p>

                <img src="img/j2.png" alt="Construction de la carte d'intersection">
            </div>
            <div class="image-item">
                <p>Algorithme de coloration et minimisation des conflits</p>

                <img src="img/j3.png" alt="Algorithme de coloration">
            </div>
        </div>
    </section>

    <!-- Section des consignes et détails techniques -->
    <section class="project-instructions">
        <h2>Consignes et détails techniques</h2>
        <p>
            Sujet : Planification du Transport Aérien pour la gestion de l’espace aérien français.
        </p>
        <ul>
            <li>Utiliser des fichiers CSV pour charger les données des aéroports et des vols.</li>
            <li>Construire le graphe d’intersection des vols (sommet = vol, arête = collision potentielle).</li>
            <li>Modéliser le problème comme une coloration de graphe avec un maximum de kmax couleurs.</li>
            <li>Développer et tester différents algorithmes de coloration afin de minimiser le nombre de conflits.</li>
            <li>Utiliser la librairie Graphstream pour la visualisation des graphes.</li>
            <li>Concevoir une interface graphique permettant de charger les données, sélectionner les algorithmes, afficher des statistiques et visualiser la coloration.</li>
            <li>Produire des fichiers de sortie pour évaluer les performances de la coloration sur des graphes d’évaluation.</li>
            <li>Intégrer les aspects de gestion de projet et de qualité de code (cahier des charges, tests unitaires, etc.).</li>
        </ul>
        <p>
            Le projet intègre plusieurs volets (SAE 201, SAE 202, SAE 205) et doit répondre à la fois aux exigences techniques et à celles de l’interface utilisateur.
        </p>
        <div class="instruction-image">
            <a class="download-link" href="file/Sujet2024-_5_-_1_.pdf">Voir la consigne</a>
        </div>
    </section>

    <!-- Section de téléchargement -->
    <section class="project-download">
        <h2>Téléchargement du projet</h2>
        <p>
            Téléchargez le projet complet pour accéder au code source, aux algorithmes de coloration et à l’interface graphique.
        </p>
        <a class="download-link" href="file/projet%20java.zip" download>Télécharger le projet (ZIP)</a>
    </section>
</main>
<footer>
    <div class="container">
        <p>&copy; 2025 Billel Hakkas - Tous droits réservés</p>
    </div>
</footer>
</body>
</html>
