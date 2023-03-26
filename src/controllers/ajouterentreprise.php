<?php

require_once('src/modele/model.php');

function addEntreprise(array $input, array $files)
{
    require('src/view/ajouterentreprise.php');

    // Vérifier que les données du formulaire sont valides
    if (!empty($input['nom']) && !empty($input['description_entreprise']) && !empty($input['secteur']) && !empty($input['mail']) && !empty($input['confiance']) && !empty($input['nombre_employes']) && !empty($files['logo']) && !empty($input['ville']) && !empty($input['code_postal']) && !empty($input['adresse_complete'])) {
        //On récupère d'abord le nom de l'image
        $img_nom = $files['logo']['name'];
        //Nous définissons un nom temporaire
        $tmp_nom = $files['logo']['tmp_name'];
        //On récupère l'heure actuelle
        $time = time();
        //On rennomme l'image en utilisant cette formule : heure + nom de l'image (Pour avoir des images uniques)
        $nouveau_nom_img = $time.$img_nom;
        //on déplace l'image dans un dossier appellé "image_bdd"
        $deplacer_img = move_uploaded_file($tmp_nom,"public\logo\images/".$nouveau_nom_img);
        
        if ($deplacer_img){
        // Appeler la fonction createEntreprise avec les paramètres fournis
            $success = createEntreprise(
            $input['nom'],
            $input['description_entreprise'],
            $input['secteur'],
            $input['mail'],
            $input['confiance'],
            $input['nombre_employes'],
            $nouveau_nom_img,
            1// Visible
        );
        if (!$success) {
            die('Impossible d\'ajouter l\'entreprise !');
        } else {
            
            $success2 = addAdresse(
                $input['ville'],
                $input['code_postal'],
                $input['adresse_complete']
            );
            if (!$success2) {
                die('Impossible d\'ajouter l\'adresse !');
            } else {
                header('Location: index.php?action=ajouterentreprise');
            }
        }
    } 
} else {
        echo ('Il manque des informations');
        return;
    }
   
}