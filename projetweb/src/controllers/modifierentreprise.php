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

        if (!$success) {// Si la fonction retourne false, on affiche un message d'erreur
            die('Impossible de modifier l\'entreprise !');
        } else {
            $success2 = modifAdresse(// Si la fonction retourne true, on modifie l'adresse de l'entreprise

                $input['ville'],
                $input['code_postal'],
                $input['adresse_complete'],
                $identifier

            );

            if (!$success2) {// Si la fonction retourne false, on affiche un message d'erreur
                die('Impossible de modifier l\'adresse !');
            } else {
                header("Location: index.php?action=modifierentreprise");// Si la fonction retourne true, on redirige vers la page de modification de l'entreprise
            }
        }
    } else {
        echo ('Il manque des informations');// Si les données du formulaire ne sont pas valides, on affiche un message d'erreur
        return;
    }
}
