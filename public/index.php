<?php

/**
 * -----------------------------------------------------------------------------------------------
 * Bienvenue sur Véga
 * -----------------------------------------------------------------------------------------------
 * 
 * index.php le contrôleur frontal
 * @see https://en.wikipedia.org/wiki/Front_controller
 * 
 * @todo Ses rôles
 *  1. Amorcer l'application
 *  2. Instancier le noyau de l'application en lui précisant le contexte dans lequel s'exécuter
 *  3. Récupérer la requête du client
 *  4. La soumettre au noyau pour traitement
 *      - Puis, récupérer la réponse correspondante
 *  5. Envoyer cette réponse au client pour affichage
 *  6. Terminer la requête
 * -----------------------------------------------------------------------------------------------
 */


// 1. Amorçage l'application (Chargement de l'environnement)
$context = require __DIR__ . "/../config/bootstrap.php";


// 2. Instancier le noyau de l'application en lui précisant le contexte dans lequel s'exécuter 
$kernel = new Kernel($context['APP_ENV'], $context['APP_DEBUG']);

