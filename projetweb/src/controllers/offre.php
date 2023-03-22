<?php

require_once('src/modele/model.php');

function offre() {

    $offres = getOffres();
    require('src/templates/offre.php');
}

function soffres(string $search) {

    $soffres = searchOffre($search);
    require('src/templates/searchoffre.php');
}