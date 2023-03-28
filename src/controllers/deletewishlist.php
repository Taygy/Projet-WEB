<?php
require_once('src/modele/model.php');

function deleteWishlist($id_offre)
{
    session_start();
    if (isset($_SESSION['id_membre']) && $_SESSION['id_membre'] > 0) {
        $id_membre = $_SESSION['id_membre'];
        $success = supprimerOffreWishlist($id_membre, $id_offre);
        if (!$success) {
            die('Impossible de supprimer l\'offre de la wishlist !');
        } else {
            header('Location: index.php?action=mawishlist');
        }
    }
}
