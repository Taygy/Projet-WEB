

<?php

require_once('src/modele/model.php');

function addEntreprise(array $input)
{
    session_start();
    require('src/view/ajouterentreprise.php');

    // Vérifier que les données du formulaire sont valides
    if (!empty($input['nom']) && !empty($input['description_entreprise']) && !empty($input['secteur']) && !empty($input['mail']) && !empty($input['confiance']) && !empty($input['nombre_employes']) && !empty($input['logo']) && !empty($input['ville']) && !empty($input['code_postal']) && !empty($input['adresse_complete'])) {
        // Appeler la fonction createEntreprise avec les paramètres fournis
        $id_entreprise = createEntreprise(
            $input['nom'],
            $input['description_entreprise'],
            $input['secteur'],
            $input['mail'],
            $input['confiance'],
            $input['nombre_employes'],
            $input['logo'],
            1 // Visible
        );

        if (!$id_entreprise) {
            die('Impossible d\'ajouter l\'entreprise !');
        } else {
            $id_adresse = addAdresse(
                $input['ville'],
                $input['code_postal'],
                $input['adresse_complete']
            );
            if (!$id_adresse) {
                die('Impossible d\'ajouter l\'adresse !');
            } else {
                $success3 = createlocaliseEntreprise($id_adresse, $id_entreprise);

                if (!$success3) {
                    die('Impossible de créer la relation entre l\'adresse et l\'entreprise !');
                } else {
                    
                }
            }
        }
    } else {
        echo ('Il manque des informations');
        return;
    }
}
