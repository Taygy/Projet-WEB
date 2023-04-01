<?php

require_once('src/modele/model.php');

function ajouterWishlist(int $id_offre)
{
    session_start();
    $success = ajouterOffreWishlist($_SESSION["id_membre"], $id_offre);//On ajoute l'offre à la wishlist
    if (!$success) {
        die('Impossible d\'ajouter l\'offre à la wishlist !');//Si l'ajout de l'offre à la wishlist a échoué, on affiche un message d'erreur
    } else {
        header('Location: index.php?action=offre');//Sinon, on redirige vers la page offre
    }
}
