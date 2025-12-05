<?php
$titre = "Notre équipe";

ob_start();
?>

<h1 class="team-title">Notre équipe</h1>
<p class="team-subtitle">
    Découvrez les personnes qui contribuent à la richesse de ce blog.
</p>

<div class="team-grid">

    <div class="team-card">
        <img src="images/author-image-1-646x680.jpg" alt="Auteur 1">
        <h3>Youssef El Idrissi</h3>
        <p>Auteur • Littérature marocaine</p>
    </div>

    <div class="team-card">
        <img src="images/author-image-2-646x680.jpg" alt="Auteur 2">
        <h3>Fatima Zahra El Amrani</h3>
        <p>Éditrice • Poésie & patrimoine</p>
    </div>

    <div class="team-card">
        <img src="images/author-image-3-646x680.jpg" alt="Auteur 3">
        <h3>Ismaïl Ben Taher</h3>
        <p>Rédacteur • Histoire & culture</p>
    </div>

    <div class="team-card">
        <img src="images/author-image-4-646x680.jpg" alt="Auteur 4">
        <h3>Salma Idrissi</h3>
        <p>Contributrice • Arts & traditions</p>
    </div>

</div>

<?php
$contenu = ob_get_clean();
require "gabarit.php";
