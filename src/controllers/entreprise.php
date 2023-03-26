<?php

require_once('src/modele/model.php');
function entreprise()
{
    $entreprise = getEntreprises();
    require('src/view/entreprise.php');
}

