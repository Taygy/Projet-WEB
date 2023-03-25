<?php

require_once('src/modele/model.php');


function detailoffre(string $identifier)
{
    $offre = getOffre($identifier);

    require('src/view/detailoffre.php');
}
