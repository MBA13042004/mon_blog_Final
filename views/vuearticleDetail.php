<?php
$titre = $article["titre"];
ob_start();
?>

<div class="article-detail-container">

    <h1 class="article-detail-title">
        <?= htmlspecialchars($article["titre"]) ?>
    </h1>

    <p class="article-detail-meta">
        <?= htmlspecialchars($article["date_publication"]) ?>  
        —  
        <?= htmlspecialchars($article["auteur"]) ?>
    </p>

    <div class="article-detail-content">
        <?= nl2br(htmlspecialchars($article["contenu"])) ?>
    </div>

    <a href="index.php?action=article" class="article-detail-btn">
        ← Retour aux articles
    </a>

</div>

<?php
$contenu = ob_get_clean();
require "gabarit.php";
?>
