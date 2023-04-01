<?php

require_once('src/modele/model.php');
function detailoffre(string $identifier)
{
    session_start();
    $offre = getOffre($identifier);//On récupère les informations plus précises d'une offre
    require('src/view/detailoffre.php');
}
