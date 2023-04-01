<?php

require_once('src/modele/model.php');
function detailetudiant(string $identifier)
{
    session_start();
    $etudiant = getEtudiant($identifier);//On récupère les informations plus précises d'un étudiant
    require('src/view/detailetudiant.php');
}