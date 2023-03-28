<?php

require_once('src/modele/model.php');

function ajouterWishlist(int $id_offre)
{
    session_start();
    $success = ajouterOffreWishlist($_SESSION["id_membre"], $id_offre);
    if (!$success) {
        die('Impossible d\'ajouter l\'offre à la wishlist !');
    } else {
        header('Location: index.php?action=offre');
    }
}
