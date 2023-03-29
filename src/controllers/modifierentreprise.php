<?php

require_once('src/modele/model.php');



function changeEntreprise(array $input, string $identifier)
{
    session_start();
    $entreprise = getEntreprise($identifier);
    require('src/view/modifierentreprise.php');
    // Vérifier que les données du formulaire sont valides
    if (!empty($input['nom']) && !empty($input['description_entreprise']) && !empty($input['secteur']) && !empty($input['mail']) && !empty($input['confiance']) && !empty($input['nombre_employes']) && !empty($input['logo']) && !empty($input['ville']) && !empty($input['code_postal']) && !empty($input['adresse_complete'])) {

        // Appeler la fonction modifEntreprise avec les paramètres fournis
        $success = modifEntreprise(
            $identifier,
            $input['nom'],
            $input['description_entreprise'],
            $input['secteur'],
            $input['mail'],
            $input['confiance'],
            $input['nombre_employes'],
            $input['logo'],
            1

        );

        if (!$success) {
            die('Impossible de modifier l\'entreprise !');
        } else {
            $success2 = modifAdresse(

                $input['ville'],
                $input['code_postal'],
                $input['adresse_complete'],
                $identifier

            );

            if (!$success2) {
                die('Impossible de modifier l\'adresse !');
            } else {
                header("Location: index.php?action=modifierentreprise");
            }
        }
    } else {
        echo ('Il manque des informations');
        return;
    }
}
