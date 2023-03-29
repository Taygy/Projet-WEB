<?php
require_once('src/modele/model.php');

function changeOffre(array $input, string $identifier)

{
    session_start();
    $offre = getOffre($identifier);
    require('src/view/modifieroffre.php');
    // Vérifier que les données du formulaire sont valides
    if (!empty($input['titre']) && !empty($input['duree']) && !empty($input['remuneration']) && !empty($input['description_offre']) && !empty($input['nombre_places']) && !empty($input['competence'])) {

        $titre = $input['titre'];
        $duree = $input['duree'];
        $remuneration = $input['remuneration'];
        $description_offre = $input['description_offre'];
        $nombre_places = $input['nombre_places'];
        $competence = $input['competence'];

        // Mettre à jour l'offre dans la table "offre"
        $success = modifOffre(
            $identifier,
            $titre,
            $duree,
            $remuneration,
            $description_offre,
            $nombre_places,
            $competence
        );

        if (!$success) {
            die('Impossible de modifier l\'offre !');
        } else {
            // Vérifier si la compétence existe déjà ou créer une nouvelle
            $id_competence = modifCompetence($competence);

            if (!$id_competence) {
                die('Impossible de modifier la compétence !');
            } else {
                header('Location: index.php?action=offre');
                return;
            }
        }
    }
}
