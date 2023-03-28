<?php

require_once('src/modele/model.php');

function etudiant()
{

    $etudiants = getEtudiant();
    require('src/view/etudiant.php');
}
