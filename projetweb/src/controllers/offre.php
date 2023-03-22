<?php

require_once('src/modele/model.php');

function offre() {

    $offres = getOffres();
    require('src/view/offre.php');
}

function soffres(string $search) {

    $soffres = searchOffre($search);
    require('src/view/searchoffre.php');
}