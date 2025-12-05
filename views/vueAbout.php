<?php
$titre = "À propos du blog";

ob_start();
?>

<section class="about-section">

    <h1 class="about-title">À propos du blog</h1>

    <p class="about-intro">
        Bienvenue dans un espace dédié à la littérature marocaine et à l’expression culturelle. 
        Notre blog met en lumière les écrivains, les œuvres et les mouvements qui façonnent la richesse artistique du Maroc.
    </p>

    <div class="about-block">
        <h2>Notre mission</h2>
        <p>
            Promouvoir la culture marocaine à travers des articles simples, accessibles et inspirants.  
            Chaque publication vise à transmettre une émotion, une réflexion ou un voyage littéraire inédit.
        </p>
    </div>

    <div class="about-block">
        <h2>Ce que vous trouverez ici</h2>
        <ul class="about-list">
            <li>Des analyses d’ouvrages d’auteurs marocains.</li>
            <li>Des portraits de nouveaux talents littéraires.</li>
            <li>Des articles inspirés de l’histoire, des traditions et de la diversité culturelle.</li>
            <li>Une valorisation moderne de la littérature marocaine.</li>
        </ul>
    </div>

    <div class="about-block">
        <h2>Pourquoi ce blog ?</h2>
        <p>
            Parce que la littérature marocaine mérite une plateforme moderne et accessible.  
            Parce que chaque lecteur peut y découvrir une voix qui résonne avec la sienne.  
            Et surtout, parce que la culture vit lorsqu’elle est partagée.
        </p>
    </div>

    <div class="about-message">
        <h2>Merci de votre visite</h2>
        <p>
            Nous espérons vous inspirer, éveiller votre curiosité  
            et vous donner envie d’explorer davantage les trésors littéraires du Maroc.
        </p>
    </div>

</section>

<?php
$contenu = ob_get_clean();
require "gabarit.php";
?>
