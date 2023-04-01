<?php
require_once('src/modele/model.php');

function deleteOffre($id_offre)
{
    session_start();
    if (isset($_SESSION['id_membre']) && ((isset($_SESSION['pilote']) && ($_SESSION['pilote'])) || (isset($_SESSION['admin']) && ($_SESSION['admin'])))) {
        //On vérifie que l'utilisateur est connecté et qu'il est pilote ou admin
        $success = supprimerOffre($id_offre);//On supprime l'offre
        if (!$success) {//Si la suppression de l'offre a échoué
            die('Impossible de supprimer l\'offre !');//On affiche un message d'erreur
        } else {
            header('Location: index.php?action=offre');
        }
    } else { 
        echo("vous n'avez pas les droits pour éxécuter cette action");//Si l'utilisateur n'est pas connecté ou qu'il n'est pas pilote ou admin, on affiche un message d'erreur
        return;
    }
}
