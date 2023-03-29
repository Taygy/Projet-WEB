<?php
require_once('src/modele/model.php');
function addPilote(array $input){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        session_start();
        if (empty($input["prenom"])) {
            die("Il manque le prenom");
        }

        if (empty($input["nom"])) {
            die("Il manque le nom");
        }

        if (empty($input["promotion"])) {
            die("Il manque la promotion");
        }

        if (empty($input["centre"])) {
            die("Il manque le centre de formation");
        }

        if (empty($input["ville"]) || empty($input["code_postal"]) || empty($input["adresse_complete"])) {
            die("Il manque des informations sur l'adresse");
        }

        if ( ! filter_var($input["email"], FILTER_VALIDATE_EMAIL)) {
            die("L'email n'est pas valide");
        }

        if (strlen($input["password"]) < 8) {
            die("Le mot de passe doit contenir au moins 8 caractères");
        }

        if ( ! preg_match("/[a-z]/i", $input["password"])) {
            die("Le mot de passe doit contenir au moins une lettre");
        }

        if ( ! preg_match("/[0-9]/", $input["password"])) {
            die("Le mot de passe doit contenir au moins un chiffre");
        }

        if ($input["password"] !== $input["password_confirmation"]) {
            die("Les mots de passe ne correspondent pas");
        }

        $password_hash = password_hash($input["password"], PASSWORD_DEFAULT);
        $id_adresse=addAdresse($input["ville"], $input["code_postal"], $input["adresse_complete"]);
        createPilote($input["nom"], $input["prenom"], $input["promotion"], $input["centre"], $input["email"], $password_hash, $id_adresse);
        header("Location: index.php?action=homepage");
    }
    require('src/view/creerpilote.php');
}