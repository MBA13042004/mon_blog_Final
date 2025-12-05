<?php

// Récupère l'action demandée

try {
$action = $_GET['action'] ?? 'accueil';
 require "controllers/ArticlesController.php";
 require "controllers/Blog_Controller.php";

switch ($action) {

    case 'accueil':
        require "views/vueAccueil.php";
        break;

    case 'blog':
        Billets();
        break;

    case 'article':
          articles();
        break;

    case 'articleDetail':
          articleDetail();
        break;


    case 'auteur':
        require "views/vueAuteur.php";   // un article du blog
        break;

    case 'about':
        require "views/vueAbout.php";
        break;

    case 'team':
        require "views/vueTeam.php";
        break;

    case 'contact':
        require "vueContact.php";
        break;

    default:
        throw new Exception ('Page Not Found Abdelhamid Samma'); // CHi mochkil mn ghir base de donné
        break;    
    }

} catch (Exception $e) {

    // On récupère le message d’erreur
    $messageErreur = $e->getMessage();

    // Et on affiche une vue d’erreur propre
    require "views/vueError.php";
}


