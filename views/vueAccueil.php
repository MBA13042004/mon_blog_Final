<?php
$titre = "Accueil";

ob_start();
?>

<h1 class="home-title">Bienvenue dans notre univers littéraire</h1>

<p class="home-intro">
    Explorez la richesse de la littérature marocaine : ses auteurs, ses traditions, 
    ses voix modernes et ses trésors culturels.  
    Chaque article est une porte ouverte vers une histoire, une émotion, un voyage.
</p>

<div class="home-grid">

    <div class="home-card">
        <h3>Auteurs marocains</h3>
        <p>Portraits, parcours et œuvres marquantes.</p>
    </div>

    <div class="home-card">
        <h3>Analyse d’œuvres</h3>
        <p>Lectures, critiques et réflexions sur des livres marquants.</p>
    </div>

    <div class="home-card">
        <h3>Culture & Histoire</h3>
        <p>Articles inspirés des traditions et du patrimoine marocain.</p>
    </div>

</div>

<div class="home-cta">
    <a href="index.php?action=blog" class="button primary"> Voir les Blogs</a>
</div>

<?php
$contenu = ob_get_clean();
require "gabarit.php";
?>
