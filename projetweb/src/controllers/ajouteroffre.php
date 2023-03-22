<?php

require_once('src/modele/model.php');
function addOffre(array $input)
{
    require('src/view/templates/ajouteroffre.tpl');
    $titre = null;
    $description_offre = null;
    $duree = null;
    $remuneration = null;
    $nombre_places = null;
    $competance = null;


    // Vérifier que les données du formulaire sont valides
    if (!empty($input['titre']) && !empty($input['description_offre']) && !empty($input['remuneration']) && !empty($input['nombre_places']) && !empty($input['duree']) && !empty($input['competance'])) {
        $titre = $input['titre'];
        $description_offre = $input['description_offre'];
        $remuneration = $input['remuneration'];
        $duree = $input['duree'];
        $nombre_places = $input['nombre_places'];
        $competance = $input['competance'];
    } else {
        echo ('Il manque des informations');
        return;
    }



    // Appeler la fonction createEntreprise avec les paramètres fournis
    $success = createOffre($titre, $duree, $remuneration, $description_offre, $nombre_places);
    if (!$success) {
        die('Impossible d\'ajouter l\'entreprise !');
    } else {
        header('Location: index.php?action=ajouteroffre');
    }
}
