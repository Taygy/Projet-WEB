<?php

require_once('src/modele/model.php');

function deleteEntreprise(string $identifier)
{
    session_start();
    if (isset($_SESSION['id_membre']) && ((isset($_SESSION['pilote']) && ($_SESSION['pilote'])) || (isset($_SESSION['admin']) && ($_SESSION['admin'])))) {
        //On vérifie que l'utilisateur est connecté et qu'il est pilote ou admin
        $success1 = supprimerAdresse($identifier);//On supprime l'adresse de l'entreprise
        if (!$success1) {//Si la suppression de l'adresse a échoué
            die('Impossible de modifier l\'entreprise !');//On affiche un message d'erreur
        } else {//Sinon
            $success2 = supprimerLocalisationEntreprise($identifier);//On supprime la localisation de l'entreprise
            if (!$success2) {//Si la suppression de la localisation a échoué
                die('Impossible de modifier l\'entreprise !');//On affiche un message d'erreur
            } else {
                $success3 = supprimerEntreprise($identifier);//On supprime l'entreprise
                if (!$success3) {//Si la suppression de l'entreprise a échoué
                    die('Impossible de modifier l\'entreprise !');//On affiche un message d'erreur
                } else {
                    header('Location: index.php?action=entreprise');//On redirige vers la page entreprise
                    return;
                }
            }
        }
        return;
    } else {
        echo("vous n'avez pas les droits pour éxécuter cette action");//Si l'utilisateur n'est pas connecté ou qu'il n'est pas pilote ou admin, on affiche un message d'erreur
        return;
    }
}
