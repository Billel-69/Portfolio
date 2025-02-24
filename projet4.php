<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet 3 : Jeu de combat Street Fighter (Python, Pygame)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="project1">
<header>
    <div class="container">
        <h1>Projet 3 : Jeu de combat type Street Fighter</h1>
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
                2023-2024 — Développement d’un jeu de combat inspiré de Street Fighter, réalisé en Python avec la bibliothèque Pygame.
                L’objectif est de proposer une expérience de combat fluide avec différentes cartes, coups spéciaux et animations.
            </p>
        </div>
        <div class="intro-image">
            <img src="img/p2.png" alt="Jeu de combat type Street Fighter en Python">
        </div>
    </section>

    <!-- Section de description détaillée du projet -->
    <section class="project-description">
        <h2>Description détaillée</h2>
        <p>
            <strong>Durée :</strong> 2 mois | <strong>Équipe :</strong> 4 personnes
        </p>
        <p>
            Ce projet s’inspire de l’univers Street Fighter et propose plusieurs fonctionnalités clés :
        <ul>
            <li>Diverses cartes de combat et environnements</li>
            <li>Gestion des coups et des animations pour chaque personnage</li>
            <li>Interface d’accueil et écran de paramètres</li>
            <li>Organisation du code en Python avec Pygame pour la partie graphique et les interactions</li>
        </ul>
        </p>
        <p>
            Grâce à Pygame, nous avons pu implémenter la détection des collisions, l’affichage fluide des sprites et des animations, ainsi que la gestion des contrôles
            pour un ou plusieurs joueurs.
        </p>
        <div class="description-images">
            <div class="image-item">
                <p>Combat en cours sur l'une des cartes disponibles</p>

                <img src="img/p1.png" alt="Combat en cours sur l'une des cartes">
            </div>
            <div class="image-item">
                <p>Interface d’accueil et sélection de la map</p>

                <img src="img/p3.png" alt="Interface du jeu Street Fighter en Python">
            </div>
        </div>
    </section>

    <!-- Section des consignes ou fonctionnalités clés -->
    <section class="project-instructions">
        <h2>Fonctionnalités principales</h2>
        <ul>
            <li>Animations fluides et coups pour chaque personnage</li>
            <li>Plusieurs environnements (cartes) intégrés</li>
            <li>Interface de configuration (choix des personnages, contrôles, etc.)</li>
            <li>Gestion des collisions, barres de vie</li>
        </ul>
        <p>
            Ce projet se veut évolutif : de nouvelles cartes ou personnages peuvent facilement être ajoutés en modifiant les sprites et les paramètres associés.
        </p>
    </section>

    <!-- Section de téléchargement -->
    <section class="project-download">
        <h2>Téléchargement du projet</h2>
        <p>
            Vous pouvez télécharger la version complète du jeu (code source Python et assets) en cliquant sur le lien ci-dessous :
        </p>
        <a class="download-link" href="file/projet%20python.zip" download>
            Télécharger le projet (ZIP)
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
