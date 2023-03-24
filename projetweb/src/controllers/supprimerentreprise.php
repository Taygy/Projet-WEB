<?php

require_once('src/modele/model.php');


function deleteEntreprise(array $input)
{
    // Vérifier que l'id_entreprise est fourni
    if (!empty($input['id_entreprise'])) {
        // Récupérer l'id_entreprise
        $id_entreprise = $input['id_entreprise'];

        // Récupérer l'id_adresse associé à l'id_entreprise
        $id_adresse = getIdAdresseByEntreprise($id_entreprise);

        if ($id_adresse === null) {
            die('Impossible de trouver l\'adresse associée à l\'entreprise !');
        }

        // Supprimer l'entreprise et l'adresse
        $deleteEntrepriseSuccess = deleteEntreprise($id_entreprise);
        $deleteAdresseSuccess = deleteAdresse($id_adresse);

        // Vérifier si les suppressions ont réussi
        if ($deleteEntrepriseSuccess && $deleteAdresseSuccess) {
            return true;
        } else {
            die('Impossible de supprimer l\'entreprise ou l\'adresse associée !');
        }
    } else {
        die('L\'id_entreprise n\'est pas fourni !');
    }
}
