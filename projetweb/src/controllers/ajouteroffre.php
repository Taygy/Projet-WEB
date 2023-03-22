<?php

require_once('src/modele/model.php');
function addOffre(array $input)
{
    require('src/view/ajouteroffre.php');
    $titre = null;
    $description_offre = null;
    $duree = null;
    $remuneration = null;
    $nombre_places = null;
    $competence = null;


    // Vérifier que les données du formulaire sont valides
    if (!empty($input['titre']) && !empty($input['description_offre']) && !empty($input['remuneration']) && !empty($input['nombre_places']) && !empty($input['duree']) && !empty($input['competence'])) {
        $titre = $input['titre'];
        $description_offre = $input['description_offre'];
        $remuneration = $input['remuneration'];
        $duree = $input['duree'];
        $nombre_places = $input['nombre_places'];
        $competence = $input['competence'];
    } else {
        echo ('Il manque des informations');
        return;
    }



    // Appeler la fonction createEntreprise avec les paramètres fournis
    $success = createOffre($titre, $duree, $remuneration, $description_offre, $nombre_places);
    if (!$success) {
        die('Impossible d\'ajouter l\'entreprise !');
    } else {
        $success2 = addCompetence($competence);
        if (!$success2) {
            die('Impossible d\'ajouter la competence !');
        } else {
            header('Location: index.php?action=ajouteroffre');
        }
        header('Location: index.php?action=ajouteroffre');
    }
}
