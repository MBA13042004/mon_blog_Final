<?php
$titre = "Articles Marocains";
ob_start();
?>

<h1 class="blog-title">Articles Marocains</h1>
<p class="blog-subtitle">
    Une sélection d’articles inspirés de la culture et de la littérature marocaine.
</p>

<div class="blog-grid">

<?php foreach ($articles as $a): ?>
    <div class="blog-card">

        <h3 class="blog-card-title">
            <?= htmlspecialchars($a["titre"]) ?>
        </h3>

        <p class="blog-card-date">
            <?= htmlspecialchars($a["date_publication"]) ?> — <?= htmlspecialchars($a["categorie"]) ?>
        </p>

        <p class="blog-card-content">
            <?= htmlspecialchars(substr($a["contenu"], 0, 160)) ?>...
        </p>

        <div class="blog-card-footer">
            <a href="index.php?action=articleDetail&id=<?= $a["id"] ?>" class="blog-btn">
                Lire plus
            </a>
        </div>

    </div>
<?php endforeach; ?>

</div>

<?php
$contenu = ob_get_clean();
require "gabarit.php";
?>
