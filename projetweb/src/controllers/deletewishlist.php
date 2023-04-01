<?php
require_once('src/modele/model.php');

function deleteWishlist($id_offre)
{
    session_start();
    if (isset($_SESSION['id_membre']) && $_SESSION['id_membre'] > 0) {// Si l'utilisateur est connecté
        if (isset($_SESSION['etudiant']) && $_SESSION['etudiant'] == 1) {// Si l'utilisateur est un étudiant
            $id_membre = $_SESSION['id_membre'];// On récupère son id
            $success = supprimerOffreWishlist($id_membre, $id_offre);// On supprime l'offre de la wishlist
            if (!$success) {
                die('Impossible de supprimer l\'offre de la wishlist !');// Si la suppression de l'offre de la wishlist a échoué, on affiche un message d'erreur
            } else {
                header('Location: index.php?action=mawishlist');
            }
        }
        } else {
            die('Vous n\'êtes pas autorisé à accéder à cette page !');// Si l'utilisateur n'est pas connecté ou qu'il n'est pas un étudiant, on affiche un message d'erreur
        }
}
