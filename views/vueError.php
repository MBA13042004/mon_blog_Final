<?php
$titre = "Erreur";

ob_start();
?>

<div class="alert alert-danger" style="padding:25px; border-radius:10px;">
    <h2 style="color:#b91c1c;"> Une erreur est survenue</h2>
    <p>
        <?= htmlspecialchars($messageErreur) ?>
    </p>
    <p>Veuillez réessayer plus tard.</p>

    <a href="index.php" class="btn btn-primary mt-3">Retour à l'accueil</a>
</div>

<?php
$contenu = ob_get_clean();
require "gabarit.php";
?>
