<?php
require_once('src/modele/model.php');
function addEtudiant(array $input)//On récupère les données du formulaire
{
    session_start();
    if ($_SERVER["REQUEST_METHOD"] === "POST") {//Si on a envoyé le formulaire

        if (empty($input["prenom"])) {//Si le champ est vide
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

        if (empty($input["ville"]) || empty($input["code_postal"]) || empty($input["adresse_complete"])) {//Si l'une des données de l'adresse est vide
            die("Il manque des informations sur l'adresse");
        }

        if (!filter_var($input["email"], FILTER_VALIDATE_EMAIL)) {//Si l'email est vide ou n'est pas valide
            die("L'email n'est pas valide");
        }

        if (strlen($input["password"]) < 8) {//Si le mot de passe est vide ou inférieur à 8 caractères
            die("Le mot de passe doit contenir au moins 8 caractères");
        }

        if (!preg_match("/[a-z]/i", $input["password"])) {//Si le mot de passe ne contient pas de lettre
            die("Le mot de passe doit contenir au moins une lettre");
        }

        if (!preg_match("/[0-9]/", $input["password"])) {//Si le mot de passe ne contient pas de chiffre
            die("Le mot de passe doit contenir au moins un chiffre");
        }

        if ($input["password"] !== $input["password_confirmation"]) {//Si les mots de passe ne correspondent pas
            die("Les mots de passe ne correspondent pas");
        }

        $password_hash = password_hash($input["password"], PASSWORD_DEFAULT);//On hash le mot de passe
        $id_adresse = addAdresse($input["ville"], $input["code_postal"], $input["adresse_complete"]);//On ajoute l'adresse
        $id_membre = createEtudiant($input["nom"], $input["prenom"], $input["promotion"], $input["centre"], $input["email"], $password_hash, $id_adresse);
        //On ajoute l'étudiant    
        createCompetenceAcquise($input["competence"], $id_membre);
        header("Location: index.php?action=etudiant");
    }
    require('src/view/creeretudiant.php');
}
