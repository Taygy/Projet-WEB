<?php

require_once('src/modele/model.php');
function addEntreprise(array $input)
{
    require('src/templates/ajouterentreprise.php');
    $nom = null;
    $description_entreprise = null;
    $secteur = null;
    $mail = null;
    $confiance = null;
    $nombre_employes = null;
    $lien_logo = null;
    $visible = 1;
    $ville = null;
    $code_postal = null;
    $adresse_complete = null;

    // Vérifier que les données du formulaire sont valides
    if (!empty($input['nom']) && !empty($input['description_entreprise']) && !empty($input['secteur']) && !empty($input['mail']) && !empty($input['confiance']) && !empty($input['nombre_employes']) && !empty($input['lien_logo']) && !empty($input['ville']) && !empty($input['code_postal']) && !empty($input['adresse_complete'])) {
        $nom = $input['nom'];
        $description_entreprise = $input['description_entreprise'];
        $secteur = $input['secteur'];
        $mail = $input['mail'];
        $confiance = $input['confiance'];
        $nombre_employes = $input['nombre_employes'];
        $lien_logo = $input['lien_logo'];
        $ville = $input['ville'];
        $code_postal = $input['code_postal'];
        $adresse_complete = $input['adresse_complete'];
    } else {
        echo ('Les données du formulaire sont invalides.');
        return;
    }



    // Appeler la fonction createEntreprise avec les paramètres fournis
    $success = createEntreprise($nom, $description_entreprise, $secteur, $mail, $confiance, $nombre_employes, $lien_logo, $visible);
    if (!$success) {
        die('Impossible d\'ajouter l\'entreprise !');
    } else {
        $success2 = addAdresse($ville, $code_postal, $adresse_complete);
        if (!$success2) {
            die('Impossible d\'ajouter l\'adresse !');
        } else {
            header('Location: index.php?action=ajouterentreprise');
        }
        header('Location: index.php?action=ajouterentreprise');
    }
}