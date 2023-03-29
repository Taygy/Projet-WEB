<?php

require_once('src/modele/model.php');


function detailetudiant(string $identifier)
{
    $etudiant = getEtudiant($identifier);

    require('src/view/detailetudiant.php');
}