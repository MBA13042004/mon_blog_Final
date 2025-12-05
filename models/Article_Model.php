<?php
require_once "Database.php";

/**
 * Récupère tous les articles
 */
function getArticles() {
    $db = Database::getInstance();

    $stmt = $db->query("SELECT * FROM articles ORDER BY date_publication DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Récupère un article par son ID
 */
function getArticleById($id) {
    $db = Database::getInstance();

    $stmt = $db->prepare("SELECT * FROM articles WHERE id = ?");
    $stmt->execute([$id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);  // Un seul article → fetch()
}
