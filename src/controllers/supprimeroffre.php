<?php
require_once('src/modele/model.php');

function deleteOffre($id_offre)
{
    session_start();
    $success = supprimerOffre($id_offre);
    if (!$success) {
        die('Impossible de supprimer l\'offre !');
    } else {
        header('Location: index.php?action=offre');
    }
}
