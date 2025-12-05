<?php
$titre = "Blog";
ob_start();
?>

<h1 class="blog-title">Nos derniers articles</h1>
<p class="blog-subtitle">
    Découvrez nos nouvelles publications autour de la littérature marocaine.
</p>

<div class="blog-grid">

<?php foreach ($billets as $billet): ?>
    <div class="blog-card">

        <h3 class="blog-card-title">
            <?= htmlspecialchars($billet['titre']) ?>
        </h3>

        <p class="blog-card-date">
            Publié le : <?= htmlspecialchars($billet['date']) ?>
        </p>

        <p class="blog-card-content">
            <?= nl2br(htmlspecialchars(substr($billet['contenu'], 0, 180))) ?>...
        </p>

    </div>
<?php endforeach; ?>

</div>

<?php
$contenu = ob_get_clean();
require 'gabarit.php';
?>
