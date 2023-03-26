<?php

require_once('src/modele/model.php');

function deleteEntreprise(int $id_entreprise)
{
    // Récupérer l'id_adresse associé à l'id_entreprise
    $id_adresse = getIdAdresseByEntreprise($id_entreprise);

    if ($id_adresse === null) {
        die('Impossible de trouver l\'adresse associée à l\'entreprise !');
    }

    // Supprimer la relation dans la table localise_entreprise
    $database = dbConnect();
    $statement = $database->prepare(
        'DELETE FROM localise_entreprise WHERE id_entreprise = ?'
    );
    $statement->execute([$id_entreprise]);

    // Supprimer l'entreprise et l'adresse
    $deleteEntrepriseSuccess = deleteEntreprise($id_entreprise);
    $deleteAdresseSuccess = deleteAdresse($id_adresse);

    // Vérifier si les suppressions ont réussi
    if ($deleteEntrepriseSuccess && $deleteAdresseSuccess) {
        return true;
    } else {
        header('Location: index.php?action=deleteentreprise&id={$entreprise[0]->id_entreprise}');
    }
}
