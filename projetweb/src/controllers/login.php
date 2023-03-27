<?php
require_once('src/modele/model.php');

function setSession()
{
    session_start();
    $is_invalid = false;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $user = verifMail($_POST["email"]);
        if ($user) {
            if (password_verify($_POST["password"], $user[0]["mdp_chiffre"])) {
                $_SESSION["id_membre"] = $user[0]["id_membre"];
                $_SESSION["prenom"] = $user[0]["prenom"];
                $_SESSION["nom"] = $user[0]["nom"];
                $_SESSION["mail"] = $user[0]["mail"];
                if ($user[0]["etudiant"] == 1) {
                    $_SESSION["etudiant"] = true;
                } else if ($user[0]["admin"] == 1) {
                    $_SESSION["admin"] = true;
                } else {
                    $_SESSION["pilote"] = true;
                }
                header("Location: index.php?action=homepage");
                exit;
            }
            $is_invalid = true;
        }
    }
    require('src/view/login.php');
}
