<?php
require_once "Database.php";

function getBillets() {
    $db = Database::getInstance();

    return $db->query(
        'SELECT BIL_ID AS id, BIL_DATE AS date,
        BIL_TITRE AS titre, BIL_CONTENU AS contenu
        FROM t_billet
        ORDER BY BIL_ID DESC'
    );
}
?>
