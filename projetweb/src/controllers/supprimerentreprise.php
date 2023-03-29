<?php

require_once('src/modele/model.php');

function deleteEntreprise(string $identifier)
{
    session_start();
    $success1 = supprimerAdresse($identifier);

    if (!$success1) {
        die('Impossible de modifier l\'entreprise !');
    } else {
        $success2 = supprimerLocalisationEntreprise($identifier);
        if (!$success2) {
            die('Impossible de modifier l\'entreprise !');
        } else {
            $success3 = supprimerEntreprise($identifier);
            if (!$success3) {
                die('Impossible de modifier l\'entreprise !');
            } 
            
        }
    }
    header('Location : index.php?action=entreprise');
    return;
}
