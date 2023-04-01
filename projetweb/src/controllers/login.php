<?php
require_once('src/modele/model.php');

function setSession()
{
    session_start();
    $is_invalid = false;//variable pour afficher un message d'erreur si le mail ou le mot de passe est incorrect
    if ($_SERVER["REQUEST_METHOD"] === "POST") {//si le formulaire a été envoyé
        $user = verifMail($_POST["email"]);//on vérifie si le mail existe dans la base de données
        if ($user) {
            if (password_verify($_POST["password"], $user[0]["mdp_chiffre"])) {//on vérifie si le mot de passe correspond au mot de passe chiffré dans la base de données
                $_SESSION["id_membre"] = $user[0]["id_membre"];//on crée les variables de session
                $_SESSION["prenom"] = $user[0]["prenom"];
                $_SESSION["nom"] = $user[0]["nom"];
                $_SESSION["mail"] = $user[0]["mail"];
                if ($user[0]["etudiant"] == 1) {//on vérifie si l'utilisateur est un étudiant, un pilote ou un administrateur
                    $_SESSION["etudiant"] = true;
                } else if ($user[0]["admin"] == 1) {
                    $_SESSION["admin"] = true;
                } else {
                    $_SESSION["pilote"] = true;
                }
                header("Location: index.php?action=homepage");
                exit;
            }
            $is_invalid = true;//si le mot de passe est incorrect, on affiche un message d'erreur
        }
    }
    require('src/view/login.php');
}
