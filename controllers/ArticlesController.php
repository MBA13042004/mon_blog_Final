<?php
require_once "models/Article_Model.php";

function articles() {
    $articles = getArticles();
    require "views/vueArticle.php"; // ou vueBlog selon ton organisation
}

function articleDetail() {
    if (!isset($_GET['id'])) {
        throw new Exception("ID article manquant");
    }

    $id = intval($_GET['id']);

    $article = getArticleById($id);

    if (!$article) {
        throw new Exception("Article introuvable");
    }

    require "views/vueArticleDetail.php";
}
