

<?php

require_once('src/modele/model.php');

function addEntreprise(array $input)
{
    session_start();//On démarre la session pour accéder aux variables de $_SESSION et pouvoir vérifier les droits
    require('src/view/ajouterentreprise.php');// Afficher le formulaire d'ajout d'entreprise
    // Vérifier que les données du formulaire sont valides
    if (!empty($input['nom']) && !empty($input['description_entreprise']) && !empty($input['secteur']) && !empty($input['mail']) && !empty($input['confiance']) && !empty($input['nombre_employes']) && !empty($input['logo']) && !empty($input['ville']) && !empty($input['code_postal']) && !empty($input['adresse_complete'])) {
        //On vérifie que les champs ne sont pas vides
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
        if (!$id_entreprise) {// Si la fonction retourne false, on affiche un message d'erreur
            die('Impossible d\'ajouter l\'entreprise !');//On affiche un message d'erreur
        } else {
            $id_adresse = addAdresse(// Si la fonction retourne true, on ajoute l'adresse de l'entreprise
                $input['ville'],
                $input['code_postal'],
                $input['adresse_complete']
            );
            if (!$id_adresse) {// Si la fonction retourne false, on affiche un message d'erreur
                die('Impossible d\'ajouter l\'adresse !');
            } else {
                $success3 = createlocaliseEntreprise($id_adresse, $id_entreprise);// Si la fonction retourne true, on crée la relation entre l'adresse et l'entreprise

                if (!$success3) {// Si la fonction retourne false, on affiche un message d'erreur
                    die('Impossible de créer la relation entre l\'adresse et l\'entreprise !');//On affiche un message d'erreur
                } else {
                    
                }
            }
        }
    } else {
        echo ('Il manque des informations');// Si les données du formulaire ne sont pas valides, on affiche un message d'erreur
        return;
    }
}
