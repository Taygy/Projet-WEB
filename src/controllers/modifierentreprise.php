<?php

require_once('src/modele/model.php');

function changeEntreprise(array $input)
{
    require('src/view/modifierentreprise.php');

    // Vérifier que les données du formulaire sont valides
    if (!empty($input['id_entreprise']) && !empty($input['nom']) && !empty($input['description_entreprise']) && !empty($input['secteur']) && !empty($input['mail']) && !empty($input['confiance']) && !empty($input['nombre_employes']) && !empty($input['logo']) && !empty($input['ville']) && !empty($input['code_postal']) && !empty($input['adresse_complete'])) {
        // Récupérer l'id_adresse associé à l'id_entreprise
        $id_adresse = getIdAdresseByEntreprise($input['id_entreprise']);

        if ($id_adresse === null) {
            die('Impossible de trouver l\'adresse associée à l\'entreprise !');
        }
        // Appeler la fonction modifEntreprise avec les paramètres fournis
        $success = modifEntreprise(
            $input['id_entreprise'],
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
            die('Impossible de modifier l\'entreprise !');
        } else {
            $success2 = modifAdresse(
                $input['id_adresse'],
                $input['ville'],
                $input['code_postal'],
                $input['adresse_complete']
            );

            if (!$success2) {
                die('Impossible de modifier l\'adresse !');
            } else {
                header("Location: index.php?action=modifierentreprise&id={$input['id_entreprise']}");
            }
        }
    } else {
        echo ('Il manque des informations');
        return;
    }
}
