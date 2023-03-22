<?php
 
require_once('src/modele/model.php');
function detailentreprise(string $identifier){
    $entreprise = getEntreprise($identifier);
    $commentaire = getCommentaires($identifier);
    function addComment(string $identifier, array $input)
    {
        $commentaire = null;
        $note = null;
        $id_membre = null;
        $id_entreprise = $identifier;
        if (!empty($input['commentaire']) && !empty($input['note']) && !empty($input['id_membre'])) {
            $commentaire = $input['commentaire'];
            $note = $input['note'];
            $id_membre = $input['id_membre'];
        } else {
            die('Les données du formulaire sont invalides.');
        }

        $success = createComment($commentaire, $note, $id_membre, $id_entreprise);
        if (!$success) {
            die('Impossible d\'ajouter le commentaire !');
        } else {
            header('Location: index.php?action=detailentreprise&id='.$identifier);
        }
    }
    require('src/view/detailentreprise.php');
}