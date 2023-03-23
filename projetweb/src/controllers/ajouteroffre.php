<?php

require_once('src/modele/model.php');

function addOffre(array $input, $identifier)
{
    require('src/view/ajouteroffre.php');

    // Vérifier que les données du formulaire sont valides
    if (!empty($input['titre']) && !empty($input['description_offre']) && !empty($input['remuneration']) && !empty($input['nombre_places']) && !empty($input['duree'])) {
        // Appeler la fonction createEntreprise avec les paramètres fournis
        $success = createOffre(
            $input['titre'],
            $input['description_offre'],
            $input['remuneration'],
            $input['duree'],
            $input['nombre_places'],
            $id_entreprise = $identifier,
            $id_competence = $identifier,
        );

        if (!$success) {
            die('Impossible d\'ajouter une offre !');
        } else {
            header('Location: index.php?action=ajouteroffre');
        }
    }
}
