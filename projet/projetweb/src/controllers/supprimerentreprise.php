<?php

require_once('src/modele/model.php');

function deleteEntreprise(string $identifier)
{
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
    echo ('Il manque l\'identifiant de l\'entreprise');
    return;
}
