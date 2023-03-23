<?php

require_once('src/modele/model.php');
function detailentreprise(string $identifier)
{
    $entreprise = getEntreprise($identifier);

    require('src/view/detailentreprise.php');
}
