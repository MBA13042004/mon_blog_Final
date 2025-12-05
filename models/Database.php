<?php

class Database {

    private static $instance = null;   // instance unique
    private $pdo;                      // connexion PDO

    // Constructeur privé → interdit l'utilisation de new Database()
    private function __construct() {

        $host   = getenv('DB_HOST') ?: "localhost";
        $dbname = getenv('DB_NAME') ?: "mon_blog";
        $user   = getenv('DB_USER') ?: "root";
        $pass   = getenv('DB_PASS') ?: "";


        try {
            $this->pdo = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $user,
                $pass,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );

        } catch (Exception $e) {
         // On récupère le message d’erreur
          $messageErreur = ' No Connection To Data Base : Contact As please !';
         // Et on affiche une vue d’erreur propre
          require "views/vueError.php";   // IMPORTANT
        }
    }

    // Méthode qui retourne l'instance unique
    public static function getInstance() {

        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance->pdo;  // retourne l'objet PDO
    }
}
