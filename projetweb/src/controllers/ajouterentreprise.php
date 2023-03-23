<?php

require_once('src/modele/model.php');

function addEntreprise(array $input)
{
    require('src/view/ajouterentreprise.php');

    // Vérifier que les données du formulaire sont valides
    if (!empty($input['nom']) && !empty($input['description_entreprise']) && !empty($input['secteur']) && !empty($input['mail']) && !empty($input['confiance']) && !empty($input['nombre_employes']) && !empty($input['logo']) && !empty($input['ville']) && !empty($input['code_postal']) && !empty($input['adresse_complete'])) {
        // Appeler la fonction createEntreprise avec les paramètres fournis
        $success = createEntreprise(
            $input['nom'],
            $input['description_entreprise'],
            $input['secteur'],
            $input['mail'],
            $input['confiance'],
            $input['nombre_employes'],
            $input['logo'],
            1 // Visible
        );

        if (!$success) {
            die('Impossible d\'ajouter l\'entreprise !');
        } else {
            $success2 = addAdresse(
                $input['ville'],
                $input['code_postal'],
                $input['adresse_complete']
            );
            if (!$success2) {
                die('Impossible d\'ajouter l\'adresse !');
            } else {
                header('Location: index.php?action=ajouterentreprise');
            }
        }
    } else {
        echo ('Il manque des informations');
        return;
    }
}
