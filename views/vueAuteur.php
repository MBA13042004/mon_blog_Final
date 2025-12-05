<?php
$titre = "Auteur";
ob_start();
?>

<section class="author-hero">

    <div class="author-card">

        <div class="author-photo-wrapper">
            <img src="images/mosab.jpg" alt="Photo de Mosab Ben Abdellah" class="author-photo">
        </div>

        <h1 class="author-name">Mosab Ben Abdellah</h1>
        <p class="author-title">Étudiant Ingénieur • Développeur Web • Passionné de littérature</p>

        <p class="author-description">
            Je suis Mosab Ben Abdellah, étudiant en 2ᵉ année du cycle d’ingénierie informatique à l’ENSA Tanger.
            J’ai créé ce blog pour partager mon amour pour la littérature marocaine, l’écriture et 
            la technologie. J’aime construire des projets modernes, élégants et utiles — 
            alliant culture, créativité et innovation.
        </p>

        <p class="author-description">
            Ce blog est un espace où je combine mes passions : développement web, design
            et valorisation de la richesse culturelle marocaine.
        </p>

        <div class="author-social">
            <a href="https://x.com/" class="fa-brands fa-x-twitter"></a>
            <a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a>
            <a href="https://www.instagram.com/" class="fa-brands fa-instagram"></a>
            <a href="https://www.linkedin.com/in/mosab-ben-abdellah-b6b7052b9/" class="fa-brands fa-linkedin-in"></a>
        </div>

    </div>

</section>

<?php
$contenu = ob_get_clean();
require "gabarit.php";
?>
