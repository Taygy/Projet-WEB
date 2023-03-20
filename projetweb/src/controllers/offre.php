<?php

require_once('src/modele/model.php');

function offre() {

    $offres = getOffres();
    require('src/templates/offre.php');
}
