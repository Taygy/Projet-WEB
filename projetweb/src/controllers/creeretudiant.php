<?php
require_once('src/modele/model.php');
function addEtudiant(array $input){

    if (empty($input["prenom"])) {
        die("Prenom is required");
    }

    if (empty($input["nom"])) {
        die("Nom is required");
    }

    if ( ! filter_var($input["email"], FILTER_VALIDATE_EMAIL)) {
        die("Valid email is required");
    }

    if (strlen($input["password"]) < 8) {
        die("Password must be at least 8 characters");
    }

    if ( ! preg_match("/[a-z]/i", $input["password"])) {
        die("Password must contain at least one letter");
    }

    if ( ! preg_match("/[0-9]/", $input["password"])) {
        die("Password must contain at least one number");
    }

    if ($input["password"] !== $input["password_confirmation"]) {
        die("Passwords must match");
    }

    $password_hash = password_hash($input["password"], PASSWORD_DEFAULT);

    addUser($input["prenom"], $input["nom"], $input["email"], $password_hash);
    header("Location: index.php?action=homepage");
    require('src/view/signup.php');
}