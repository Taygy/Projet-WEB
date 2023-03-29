<?php

require_once('src/modele/model.php');

function ajouterOffre(array $input, int $id_entreprise)
{
    session_start();
    $entreprise = getEntreprise($id_entreprise);
    require('src/view/ajouteroffre.php');

    // Vérifier que les données du formulaire sont valides
    if (!empty($input['titre']) && !empty($input['duree']) && !empty($input['remuneration']) && !empty($input['description_offre']) && !empty($input['nombre_places']) && !empty($input['competence'])) {

        // Appeler la fonction createOffre avec les paramètres fournis
        $id_offre = createOffre(

            $input['titre'],
            $input['duree'],
            $input['remuneration'],
            $input['description_offre'],
            $input['nombre_places'],
            $id_entreprise
        );

        if (!$id_offre) {
            die('Impossible d\'ajouter l\'offre !');
        } else {
            // Vérifier si la compétence existe déjà ou créer une nouvelle
            $id_competence = CreateCompetence($input['competence']);

            if (!$id_competence) {
                die('Impossible d\'ajouter la compétence !');
            } else {
                // Créer une association entre l'offre et la compétence
                $success = createcompetenceRequises($id_offre, $id_competence);

                if (!$success) {
                    die('Impossible d\'associer l\'offre et la compétence !');
                } else {
                    header('Location: index.php?action=ajouteroffre');
                }
            }
        }
    } else {
        echo ('Il manque des informations');
        return;
    }
}
