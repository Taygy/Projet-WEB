<?php

require_once('src/modele/model.php');
function entreprise()
{
    $entreprises = getEntreprises();
    require('src/view/entreprise.php');
}
