<?php

require_once('src/modele/model.php');
function detailentreprise(string $identifier)
{
    session_start();
    $entreprise = getEntreprise($identifier);//On récupère les informations plus précises d'une entreprise
    require('src/view/detailentreprise.php');
}
